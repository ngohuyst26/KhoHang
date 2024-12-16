<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class MomoPaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status != 'pending') {
            return response()->json(['message' => 'Đơn hàng không ở trạng thái chờ thanh toán'], 400);
        }
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $endpoint = env('MOMO_ENDPOINT');

        $orderId = time();
        $orderInfo = "Thanh toán qua Momo ATM";
        $amount = $order->total_payment;
        $redirectUrl = route('momo.callback');
        $ipnUrl = route('wallet.ipn');

        // Tạo signature
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$order->id&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$orderId&requestType=payWithATM";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        // Chuẩn bị dữ liệu gửi đi
        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            'storeId' => "MomoTestStore",
            'requestId' => $orderId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $order->id,
            'requestType' => "payWithATM",
            'signature' => $signature,

        ];

        $response = Http::post($endpoint, $data);
        if ($response->successful()) {
            return response()->json([
                'payUrl' => $response->json()['payUrl']
            ]);
        } else {
            return response()->json([
                'error' => $response->json()
            ], 500);
        }
    }

    public function callback(Request $request)
    {
        $resultCode = $request->input('resultCode');
        if ($resultCode == 0) {
            $order = Orders::findOrFail($request->input('extraData'));
            $order->payment_method_id = 2;
            $order->status = 'completed';
            $order->save();

            return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_SUCCESS_MOMO'). '?type=payment_order');
        } else {
            return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_FAIL_MOMO'). '?type=payment_order');
        }
    }

    public function ipn(Request $request)
    {
        // Xử lý IPN (Instant Payment Notification) từ Momo
        Log::info('Momo IPN', $request->all());
        return response()->json(['status' => 'success']);
    }
}
