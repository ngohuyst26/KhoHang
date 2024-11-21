<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\ProductSku;
use App\Services\WalletService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalletPaymentController extends Controller
{
    protected $walletService;

    public function __construct(WalletService $walletService)
    {
        $this->walletService = $walletService;
    }
    public function payOrder(Request $request)
    {
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status !== 'pending') {

            return response()->json([
                'status'  => 'fail',
                'message' => 'Đơn hàng không ở trạng thái chờ thanh toán'
            ], 400);
        }

        try {
            $this->walletService->payOrderUsingWallet($order);

            return response()->json([
                'status'  => 'success',
                'message' => 'Thanh toán thành công'
            ], 200);
        } catch (Exception $e) {

            return response()->json([
                'status'  => 'fail',
                'message' => $e->getMessage()
            ], 400);
        }

    }

    public function cancelOrder(Request $request){
        $order = Orders::findOrFail($request->input('order_id'));

        if ($order->status !== 'completed') {

            return response()->json([
                'status'  => 'fail',
                'message' => 'Chỉ thực hiện trên đơn hàng đã thanh toán'
            ], 400);
        }

        foreach ($order->orderItems as $item){
            $product_sku = ProductSku::find($item['product_sku_id']);
            $product_sku->inventory += $item['quantity'];
            $product_sku->save();
        }

        try{
            $this->walletService->refundToWallet($order);
            return response()->json([
                'status'  => 'success',
                'message' => 'Hoàn tiền thành công'
            ], 200);
        }catch (Exception $e) {

            return response()->json([
                'status'  => 'fail',
                'message' => $e->getMessage()
            ], 400);
        }
    }



}
