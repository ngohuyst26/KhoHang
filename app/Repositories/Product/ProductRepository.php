<?php

namespace App\Repositories\Product;

use App\Models\OptionValue;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\SkuValue;
use App\Repositories\BaseRepository;


class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function getAll(int $page)
    {
        return Product::with(['productSku.photo', 'productSku.optionValue.option'])->paginate($page);
    }

    public function addProduct($request)
    {
        $data = $request->all();

        $product = $this->createProduct($request);

        if (!isset($data['generated'])) {
            $sku = $this->createSku($product->id, $request->price, $request->sale_price, $request->inventory);
            return $sku->id;
        } else {
            foreach ($data['generated'] as $index => $combination) {
                $price = $combination['price'];
                $sale_price = $combination['sale_price'];
                $inventory = $combination['stock'];
                $sku = $this->createSku($product->id, $price, $sale_price, $inventory);
                $optionValues = [];
                foreach ($combination as $key => $value) {
                    if ($key !== 'price' && $key !== 'stock' && $key !== 'sale_price') {
                        $optionId = $key;
                        $optionValue = $this->createOptionValue($product->id, $optionId, $value);
                        if ($optionValue) {
                            $optionValues[] = [
                                'option_id' => $optionId,
                                'option_value_id' => $optionValue->id,
                            ];
                        }
                    }
                }
                foreach ($optionValues as $optionValue) {
                    $this->createSkuValue($product->id, $sku->id, $optionValue);
                }
            }
        }
        return true;
    }

    public function createProduct($request)
    {
        return Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'description' => $request->description
        ]);
    }


    public function createSku($productId, $price, $sale_price, $inventory)
    {
        return ProductSku::create([
            'product_id' => $productId,
            'price' => $price,
            'sale_price' => $sale_price,
            'inventory' => $inventory,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function createPhoto($skuId, $filePath)
    {
        Photo::create([
            'product_sku_id' => $skuId,
            'url' => $filePath
        ]);
    }

    public function createOptionValue($productId, $optionId, $value)
    {
        return OptionValue::updateOrCreate(
            ['product_id' => $productId, 'option_id' => $optionId, 'name' => $value],
            ['created_at' => now(), 'updated_at' => now()]
        );
    }

    public function getOptionValue($productId, $optionId, $value)
    {
        return OptionValue::where('product_id', $productId)
            ->where('option_id', $optionId)
            ->where('name', $value)
            ->value('id');
    }

    public function createSkuValue($productId, $skuId, $optionValue)
    {
        SkuValue::create([
            'product_id' => $productId,
            'sku_id' => $skuId,
            'option_id' => $optionValue['option_id'],
            'option_value_id' => $optionValue['option_value_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
