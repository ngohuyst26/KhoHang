<?php

namespace App\Repositories\ImportGoods;


use App\Models\DetailImportGoods;
use App\Models\ImportGoods;
use App\Models\ProductSku;
use App\Repositories\BaseRepository;
use Exception;

class ImportGoodsRepository extends BaseRepository implements ImportGoodsRepositoryInterface{

    public function __construct(ImportGoods $model){ parent::__construct($model); }

    public function getAll(){
        try{
            return ImportGoods::where('status', "=", 1)
                              ->with(['supplier', 'detailImportGoods.product.product', 'detailImportGoods.product.photo', 'detailImportGoods.product.optionValue.option'])
                              ->paginate();
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    public function createImportGoods($request){
        try{
            $importGoods = $this->create([
                'supplier_id'       => $request->supplier_id,
                'code'              => $request->code,
                'total_goods'       => $request->total_goods,
                'discount'          => $request->discount,
                'supplier_payments' => $request->supplier_payments,
                'description'       => $request->description
            ]);
            foreach ($request->detail_import_goods as $detail){
                DetailImportGoods::create([
                    'import_goods_id' => $importGoods->id,
                    'product_id'      => $detail['product_id'],
                    'qty'             => $detail['qty'],
                    'discount'        => $detail['discount'],
                    'price'           => $detail['price'],
                    'total_price'     => $detail['total_price']
                ]);
            }

            return response()->json([
                'status'  => TRUE,
                'message' => 'Tạo thành công phiếu nhập kho!'
            ], 201);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    public function updateImportGoods($request, $id){
        try{
            // Cập nhật thông tin phiếu nhập kho
            $this->update($id, [
                'supplier_id'       => $request->supplier_id,
                'code'              => $request->code,
                'total_goods'       => $request->total_goods,
                'discount'          => $request->discount,
                'supplier_payments' => $request->supplier_payments,
                'description'       => $request->description
            ]);


            $currentProducts = DetailImportGoods::where('import_goods_id', $id)
                                                ->pluck('product_id')
                                                ->toArray();

            $newProducts = collect($request->detail_import_goods)->pluck('product_id')->toArray();


            $productsToDelete = array_diff($currentProducts, $newProducts);

            DetailImportGoods::where('import_goods_id', $id)
                             ->whereIn('product_id', $productsToDelete)
                             ->delete();

            foreach ($request->detail_import_goods as $import_good){
                $sku = ProductSku::find($import_good['product_id']);
                if (!isset($sku->id)){
                    return response()->json([
                        "status"  => FALSE,
                        "message" => "Mã sản phẩm không hợp lệ"
                    ], 400);
                }

                DetailImportGoods::updateOrCreate(
                    [
                        'product_id'      => $import_good['product_id'],
                        'import_goods_id' => $id
                    ],
                    [
                        'qty'         => $import_good['qty'],
                        'price'       => $import_good['price'],
                        'discount'    => $import_good['discount'],
                        'total_price' => $import_good['total_price']
                    ]
                );
            }

            return response()->json([
                'data' => [
                    'status'  => TRUE,
                    'message' => 'Cập nhật thành công',
                    'data'    => ImportGoods::with([
                        'supplier',
                        'detailImportGoods.product.product',
                        'detailImportGoods.product.photo',
                        'detailImportGoods.product.optionValue.option'
                    ])->find($id),
                ]
            ], 200);

        }catch (Exception $e){
            return response()->json([
                'data' => [
                    'status'  => FALSE,
                    'message' => 'Đã có lỗi xảy ra trong quá trình cập nhật',
                    'detail'  => $e->getMessage()
                ]
            ], 400);
        }
    }

    public function cancelImportGoods($id){
        try{
            $this->update($id, [
                'status' => 2
            ]);

        }catch (Exception $e){
            return response()->json([
                'data' => [
                    'status'  => FALSE,
                    'message' => 'Đã có lỗi xảy ra trong quá trình xóa phiếu!',
                    'detail'  => $e->getMessage()
                ]
            ], 400);
        }

        return response()->json([
            'status'  => TRUE,
            'message' => "Hủy phiếu nhập kho thành công!"
        ], 200);
    }
}