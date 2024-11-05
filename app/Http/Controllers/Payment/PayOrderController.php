<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayOrderController extends Controller
{
    public function payOrder(Request $request, $orderId)
    {
        $user = auth()->user();
        $order = Orders::findOrFail($orderId);

        if ($order->status != 'pending') {
            return response()->json(['message' => 'Order is not pending'], 400);
        }

        $paymentMethodId = $request->input('payment_method_id');
        $paymentMethod = PaymentMethod::findOrFail($paymentMethodId);

        DB::beginTransaction();
        try {
            switch ($paymentMethod->name) {
                case 'wallet':
                    $wallet = $user->wallet;
                    if (!$wallet || $wallet->balance < $order->amount) {
                        return response()->json(['message' => 'Insufficient wallet balance'], 400);
                    }
                    $wallet->balance -= $order->amount;
                    $wallet->save();
                    break;

                case 'momo':
                    // Logic xử lý thanh toán qua thẻ tín dụng
                    break;

                case 'Bank Transfer':
                    // Logic xử lý thanh toán qua chuyển khoản ngân hàng
                    break;

                // Thêm các phương thức khác nếu cần
            }

            $order->payment_method_id = $paymentMethodId;
            $order->status = 'completed';
            $order->save();

            DB::commit();
            return response()->json(['message' => 'Payment successful'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Payment failed', 'error' => $e->getMessage()], 500);
        }
    }
}
