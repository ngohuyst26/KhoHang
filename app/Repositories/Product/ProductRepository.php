<?php

namespace App\Repositories\Product;

use App\Models\DetailCheckStock;
use App\Models\OptionValue;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\SkuValue;
use App\Repositories\BaseRepository;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

    protected $checkStockRepository;

    public function __construct(
        Product $model,
        CheckStockRepositoryInterface $checkStockRepository){
        parent::__construct($model);
        $this->checkStockRepository = $checkStockRepository;
    }

    public function getAll(int $page){
        return Product::with(['productSku.photo', 'productSku.optionValue.option'])
                      ->where('status', '=', 1)
                      ->orderBy('id', 'DESC')
                      ->paginate($page);
    }

    public function getTrash(int $page){
        return Product::with(['productSku.photo', 'productSku.optionValue.option'])
                      ->where('status', '=', 2)
                      ->orderBy('id', 'DESC')
                      ->paginate($page);
    }

    public function addProduct($request){
        $data = $request->all();

        $product    = $this->createProduct($request);
        $checkStock = $this->checkStockRepository->create([
            'description' => 'Được tạo tự động khi thêm sản phẩm'
        ]);
        if (!isset($data['generated'])){
            $sku = $this->createSku($product->id, $request->price, $request->sale_price,
                $request->inventory, $request->barcode);
            DetailCheckStock::create([
                'check_stock_id'   => $checkStock->id,
                'product_sku_id'   => $sku->id,
                'ac_number'        => $sku->inventory,
                'total_difference' => $sku->inventory,
                'value'            => $sku->price * $sku->inventory
            ]);
            $this->checkStockRepository->update($checkStock->id, [
                'ac_number'        => $sku->inventory,
                'ac_total'         => $sku->price * $sku->inventory,
                'total_difference' => $sku->inventory,
                'qty_increased'    => $sku->inventory,
            ]);

            return $sku->id;
        } else{
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            foreach ($data['generated'] as $index => $combination){
                $price      = $combination['price'];
                $sale_price = $combination['sale_price'];
                $inventory  = $combination['stock'];
                $barcode    = 0;
                $sku        = $this->createSku($product->id, $price, $sale_price, $inventory,
                    $barcode);
                DetailCheckStock::create([
                    'check_stock_id'   => $checkStock->id,
                    'product_sku_id'   => $sku->id,
                    'ac_number'        => $sku->inventory,
                    'total_difference' => $sku->inventory,
                    'value'            => $sku->price * $sku->inventory
                ]);

                $ac_number        += $sku->inventory;
                $ac_total         += ($sku->price * $sku->inventory);
                $total_difference += $sku->inventory;
                $qty_increased    += $sku->inventory;

                $optionValues = [];
                foreach ($combination as $key => $value){
                    if ($key !== 'price' && $key !== 'stock' && $key !== 'sale_price'){
                        $optionId    = $key;
                        $optionValue = $this->createOptionValue($product->id, $optionId, $value);
                        if ($optionValue){
                            $optionValues[] = [
                                'option_id'       => $optionId,
                                'option_value_id' => $optionValue->id,
                            ];
                        }
                    }
                }
                foreach ($optionValues as $optionValue){
                    $this->createSkuValue($product->id, $sku->id, $optionValue);
                }
            }
            $this->checkStockRepository->update($checkStock->id, [
                'ac_number'        => $ac_number,
                'ac_total'         => $ac_total,
                'total_difference' => $total_difference,
                'qty_increased'    => $qty_increased,
            ]);
        }

        return true;
    }

    public function createProduct($request){
        return Product::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'description' => $request->description
        ]);
    }


    public function createSku($productId, $price, $sale_price, $inventory, $barcode){
        return ProductSku::create([
            'product_id' => $productId,
            'price'      => $price,
            'sale_price' => $sale_price,
            'inventory'  => $inventory,
            'barcode'    => $barcode,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function createPhoto($skuId, $filePath){
        Photo::create([
            'product_sku_id' => $skuId,
            'url'            => $filePath
        ]);
    }

    public function createOptionValue($productId, $optionId, $value){
        return OptionValue::updateOrCreate(
            ['product_id' => $productId, 'option_id' => $optionId, 'name' => $value],
            ['created_at' => now(), 'updated_at' => now()]
        );
    }

    public function getOptionValue($productId, $optionId, $value){
        return OptionValue::where('product_id', $productId)
            ->where('option_id', $optionId)
            ->where('name', $value)
            ->value('id');
    }

    public function createSkuValue($productId, $skuId, $optionValue){
        SkuValue::create([
            'product_id'      => $productId,
            'sku_id'          => $skuId,
            'option_id'       => $optionValue['option_id'],
            'option_value_id' => $optionValue['option_value_id'],
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);
    }

}
