<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PayOrderController extends Controller
{
    public function payOrder(Request $request)
    {
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status != 'pending') {
            return response()->json(['message' => 'Đơn hàng không ở trạng thái chờ thanh toán'], 400);
        }

        DB::beginTransaction();
        try {
            $user = auth()->user();
            $wallet = $user->wallet;
            if (!$wallet || $wallet->balance < $order->total_payment) {
                return response()->json(['message' => 'Số dư trong ví không đủ để thanh toán.'], 400);
            }
            $wallet->balance -= $order->total_payment;
            $wallet->save();

            $order->payment_method_id = 1;
            $order->status = 'completed';
            $order->save();

            DB::commit();
            return response()->json(['message' => 'Payment successful1'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Payment failed', 'error' => $e->getMessage()], 500);
        }
    }
}
