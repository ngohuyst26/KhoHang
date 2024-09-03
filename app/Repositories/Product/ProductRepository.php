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

class ProductRepository extends BaseRepository implements ProductRepositoryInterface{

    protected $checkStockRepository;

    public function __construct(
        Product $model,
        CheckStockRepositoryInterface $checkStockRepository
    ){
        parent::__construct($model);
        $this->checkStockRepository = $checkStockRepository;
    }

    public function getAll(int $page){
        return Product::with(['productSku.photo', 'productSku.optionValue.option', 'productSku.storageLocation'])
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
        dd($data);
        $product    = $this->createProduct($request);
        $checkStock = $this->checkStockRepository->create([
            'description' => 'Được tạo tự động khi thêm sản phẩm'
        ]);
        if (!isset($data['generated'])){
            $sku = $this->createSku(
                $product->id,
                $request->price,
                $request->sale_price,
                $request->inventory,
                $request->barcode
            );
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
        }else{
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            foreach ($data['generated'] as $index => $combination){
                $price      = $combination['price'];
                $sale_price = $combination['sale_price'];
                $inventory  = $combination['stock'];
                $barcode    = 0;
                $sku        = $this->createSku(
                    $product->id,
                    $price,
                    $sale_price,
                    $inventory,
                    $barcode
                );
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

        return TRUE;
    }

    public function addProductApi($request){
        $data       = $request->all();
        $product    = $this->createProduct($request);
        $checkStock = $this->checkStockRepository->create([
            'description' => 'Được tạo tự động khi thêm sản phẩm'
        ]);
        $sku_id     = [];
        if (!isset($data['variants'])){
            if (empty($request->code)){
                $request->merge(['code' => ProductSku::generateNextCode()]);
            }else{
                $existingSku = ProductSku::where('code', $request->code)->first();
                if ($existingSku){
                    $request->merge(['code' => ProductSku::generateNextCode()]);
                }
            }
            $sku = $this->createSku(
                $product->id,
                $request->price,
                $request->sale_price,
                $request->stock,
                $request->barcode,
                $request->code
            );
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
            if ($data['locations']){
                $sku_location = ProductSku::find($sku->id);
                $sku_location->storageLocation()->attach($data['locations']);
            }

            return $sku_id = [$sku->id];
        }else{
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            foreach ($data['variants'] as $index => $combination){
                $price      = $combination['price'] ?? 0;
                $sale_price = $combination['sale_price'] ?? 0;
                $inventory  = $combination['stock'] ?? 0;
                $barcode    = $combination['barcode'] ?? 0;
                $code       = $combination['code'] ?? NULL;
                if (empty($code)){
                    $code = ProductSku::generateNextCode();
                }else{
                    $existingSku = ProductSku::where('code', $code)->first();
                    if ($existingSku){
                        $code = ProductSku::generateNextCode();
                    }
                }
                $sku      = $this->createSku(
                    $product->id,
                    $price,
                    $sale_price,
                    $inventory,
                    $barcode,
                    $code
                );
                $sku_id[] = $sku->id;
                if ($data['locations']){
                    $sku_location = ProductSku::find($sku->id);
                    $sku_location->storageLocation()->attach($data['locations']);
                }
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
                foreach ($combination['options'] as $value){
                    $optionId    = $value['id'];
                    $valueOption = $value['value'];
                    $optionValue = $this->createOptionValue($product->id, $optionId, $valueOption);
                    if ($optionValue){
                        $optionValues[] = [
                            'option_id'       => $optionId,
                            'option_value_id' => $optionValue->id,
                        ];
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

        return $sku_id;
    }

    public function createProduct($request){
        return Product::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'description' => $request->description
        ]);
    }


    public function createSku($productId, $price, $sale_price, $inventory, $barcode = NULL, $code){
        return ProductSku::create([
            'product_id' => $productId,
            'price'      => $price,
            'sale_price' => $sale_price,
            'inventory'  => $inventory,
            'barcode'    => $barcode,
            'code'       => $code,
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

    public function getOneSku($product_id, $sku_id){
        return Product::with([
            'productSku' => function ($query) use ($sku_id){
                $query->where('id', $sku_id)
                      ->with('optionValue.option', 'photo', 'storageLocation');
            }
        ])->find($product_id);
    }

    public function updateProductSku($request, $id, $skuId){
        $sku = ProductSku::find($skuId);
        try{
            if (isset($sku)){
                // Kiểm tra mã sản phẩm mới
                if ($request->has('code') && !empty($request->code)){
                    $existingSku = ProductSku::where('code', $request->code)->first();
                    if ($existingSku && $existingSku->id != $skuId){
                        return response()->json([
                            'errors' => [
                                'status'  => 400,
                                'message' => 'Mã sản phẩm đã tồn tại'
                            ]
                        ], 400);
                    }
                    $sku->code = $request->code;
                }

                Product::where('id', $id)->update([
                    'name'        => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'supplier_id' => $request->supplier_id
                ]);

                if ($sku->inventory != $request->inventory){
                    $checkStock = $this->checkStockRepository->create([
                        'description' => 'Được tạo tự động khi cập nhật sản phẩm',
                    ]);

                    DetailCheckStock::create([
                        'check_stock_id'   => $checkStock->id,
                        'product_sku_id'   => $sku->id,
                        'stock'            => $sku->inventory,
                        'ac_number'        => $request->stock,
                        'total_difference' => $request->stock - $sku->inventory,
                        'value'            => $request->price * ($request->stock - $sku->stock)
                    ]);

                    $this->checkStockRepository->update($checkStock->id, [
                        'ac_number'        => $request->stock,
                        'ac_total'         => $request->price * $request->stock,
                        'total_difference' => $request->stock - $sku->inventory,
                        'qty_increased'    => ($sku->inventory < $request->stock ? $request->stock - $sku->inventory : 0),
                        'qty_decreased'    => ($sku->inventory > $request->stock ? $request->stock - $sku->inventory : 0),
                    ]);
                }

                $sku->update([
                    'price'      => $request->price,
                    'sale_price' => $request->sale_price,
                    'inventory'  => $request->stock,
                ]);

                return response()->json([
                    'data' => [
                        'status'  => 200,
                        'message' => 'Cập nhật thành công'
                    ]
                ], 200);
            }

            return response()->json([
                'data' => [
                    'status'  => 404,
                    'message' => 'Sản phẩm không tồn tại'
                ]
            ], 404);
        }catch (\Exception $e){
            return response()->json([
                'data' => [
                    'status'  => 400,
                    'message' => 'Đã có lỗi xảy ra trong quá trình cập nhật',
                    'detail'  => $e->getMessage()
                ]
            ], 400);
        }
    }

    public function deleteProduct($id){
        $product = $this->find($id);
        if (isset($product)){
            $status = 2;
            $this->update($id, [
                'status' => $status
            ]);

            return response()->json([
                'data' => [
                    'status'  => 200,
                    'message' => 'Xóa thành công'
                ]
            ], 200);
        }

        return response()->json([
            'data' => [
                'status'  => 200,
                'message' => 'Sản phẩm không tồn tại'
            ]
        ], 404);
    }

    public function restoreProduct($id){
        $product = $this->find($id);
        if (isset($product)){
            $status = 1;
            $this->update($id, [
                'status' => $status
            ]);

            return response()->json([
                'data' => [
                    'status'  => 200,
                    'message' => 'Khôi phục thành công'
                ]
            ], 200);
        }

        return response()->json([
            'data' => [
                'status'  => 200,
                'message' => 'Khôi phục thành công'
            ]
        ], 404);
    }

}