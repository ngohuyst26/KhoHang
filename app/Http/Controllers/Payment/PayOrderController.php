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
        $user = auth()->user();
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status != 'pending') {
            return response()->json(['message' => 'Order is not pending'], 400);
        }

        $paymentMethod = PaymentMethod::find($request->input('payment_method_id'));
        if(!$paymentMethod){
            return response()->json(['message' => 'Không tồn tại phương thức thanh toán'], 404);
        }

        DB::beginTransaction();
        try {
            switch ($paymentMethod->name) {
                case 'wallet':
                    $wallet = $user->wallet;
                    if (!$wallet || $wallet->balance < $order->total_payment) {
                        return response()->json(['message' => 'Số dư trong ví không đủ để thanh toán.'], 400);
                    }
                    $wallet->balance -= $order->total_payment;
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

            $order->payment_method_id = $request->input('payment_method_id');
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
