<?php

namespace App\Repositories\CheckStock;

use App\Models\CheckStock;
use App\Models\DetailCheckStock;
use App\Models\ProductSku;
use App\Repositories\BaseRepository;

class CheckStockRepository extends BaseRepository implements CheckStockRepositoryInterface{

    public function __construct(CheckStock $model){
        parent::__construct($model);
    }

    public function getOneCheckStock($id){
        return CheckStock::with(['detailStock.productSku.product', 'detailStock.productSku.optionValue.option', 'detailStock.productSku.photo'])
                         ->find($id);
    }


    public function createCheckStock($request){
        if ($request->has('cart')){
            $checkStock       = $this->create([
                "code" => CheckStock::generateNextCode()
            ]);
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            $qty_decreased    = 0;
            foreach ($request->cart as $cart){
                $sku = ProductSku::find($cart['sku_id']);
                if (!isset($sku->id)){
                    return response()->json([
                        "status"  => FALSE,
                        "message" => "Mã sản phẩm không hợp lệ"
                    ], 400);
                }
                DetailCheckStock::create([
                    'check_stock_id'   => $checkStock->id,
                    'product_sku_id'   => $sku->id,
                    'stock'            => $sku->inventory,
                    'ac_number'        => $cart['quantity'],
                    'total_difference' => $cart['quantity'] - $sku->inventory,
                    'value'            => $sku->price * ($cart['quantity'] - $sku->inventory)
                ]);
                $ac_number        += $cart['quantity'];
                $ac_total         += $sku->price * ($cart['quantity'] - $sku->inventory);
                $total_difference += $cart['quantity'] - $sku->inventory;
                $qty_increased    += ($sku->inventory < $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);
                $qty_decreased    += ($sku->inventory > $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);

                if ($request->status == 2){
                    $sku->update([
                        'inventory' => $cart['quantity']
                    ]);
                }
            }
            $this->update($checkStock->id, [
                'ac_number'        => $ac_number,
                'ac_total'         => $ac_total,
                'total_difference' => $total_difference,
                'qty_increased'    => $qty_increased,
                'qty_decreased'    => $qty_decreased,
            ]);

            return response()->json([
                "data" => [
                    'status'  => TRUE,
                    'message' => 'Thêm kiểm kho thành công'
                ]
            ], 201);
        }

        return response()->json([
            "data" => [
                'status'  => FALSE,
                'message' => 'Thêm kiểm kho thất bại đã có lỗi xảy ra!'
            ]
        ], 400);
    }

    public function updateCheckStock($request, $id){
        if ($request->has('cart')){
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            $qty_decreased    = 0;
            foreach ($request->cart as $cart){
                $sku = ProductSku::find($cart['sku_id']);
                if (!isset($sku->id)){
                    return response()->json([
                        "status"  => FALSE,
                        "message" => "Mã sản phẩm không hợp lệ"
                    ], 400);
                }
                DetailCheckStock::updateOrCreate(
                    [
                        'check_stock_id' => $id,
                        'product_sku_id' => $sku->id
                    ],
                    [
                        'stock'            => $sku->inventory,
                        'ac_number'        => $cart['quantity'],
                        'total_difference' => $cart['quantity'] - $sku->inventory,
                        'value'            => $sku->price * ($cart['quantity'] - $sku->inventory)
                    ]);
                $ac_number        += $cart['quantity'];
                $ac_total         += $sku->price * ($cart['quantity'] - $sku->inventory);
                $total_difference += $cart['quantity'] - $sku->inventory;
                $qty_increased    += ($sku->inventory < $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);
                $qty_decreased    += ($sku->inventory > $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);

                if ($request->status == 2){
                    $sku->update([
                        'inventory' => $cart['quantity']
                    ]);
                }
            }
            $this->update($id, [
                'ac_number'        => $ac_number,
                'ac_total'         => $ac_total,
                'total_difference' => $total_difference,
                'qty_increased'    => $qty_increased,
                'qty_decreased'    => $qty_decreased,
            ]);

            return response()->json([
                "data" => [
                    'status'  => TRUE,
                    'message' => 'Cập nhật kiểm kho thành công'
                ]
            ], 200);
        }

        return response()->json([
            "data" => [
                'status'  => 400,
                'message' => 'Cập nhật kiểm kho thất bại đã có lỗi xảy ra!'
            ]
        ], 400);
    }

    public function cancelCheckStock($id){
        $checkStock = $this->getOneCheckStock($id);
        if (!isset($checkStock->id) || $checkStock->status == 3){
            return response()->json([
                'status'  => FALSE,
                'message' => "Mã kiểm kho không hợp lệ"
            ], 400);
        }
        if ($checkStock->status === 2){
            foreach ($checkStock->detailStock as $detailStock){
                $sku = ProductSku::find($detailStock->product_sku_id);
                if (!isset($sku->id)){
                    return response()->json([
                        'status'  => FALSE,
                        'message' => "Đã có lỗi sản ra khi hủy phiếu kiểm kho"
                    ]);
                }
                $sku->update([
                    'inventory' => $detailStock->ac_number - $detailStock->total_difference
                ]);
            }
        }
        $checkStock->update([
            'status' => 3
        ]);

        return response()->json([
            'status'  => TRUE,
            'message' => "Hủy phiếu kiểm kho thành công"
        ], 200);
    }
}
