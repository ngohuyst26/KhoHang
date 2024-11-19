<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
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
            return response()->json(['message' => 'Đơn hàng không ở trạng thái chờ thanh toán'], 400);
        }

        try {
            $this->walletService->payOrderUsingWallet($order);
            return response()->json(['message' => 'Thanh toán thành công'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

    public function cancelOrder(Request $request){
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status !== 'completed') {
            return response()->json(['message' => 'Đơn hàng chưa được thanh toán'], 400);
        }
        try{
            $this->walletService->refundToWallet($order);
            return response()->json(['message' => 'Hoàn tiền thành công'], 200);
        }catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }


    }



}
