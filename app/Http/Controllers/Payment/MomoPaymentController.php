<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class MomoPaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $endpoint = env('MOMO_ENDPOINT');

        $orderId = time(); // Hoặc bạn có thể dùng ID khác của đơn hàng
        $orderInfo = "Thanh toán qua Momo ATM";
        $amount = $request->input('amount');
        $redirectUrl = route('momo.callback');
        $ipnUrl = route('momo.ipn');

        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$orderId&requestType=payWithATM";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

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
            'extraData' => "",
            'requestType' => "payWithATM",
            'signature' => $signature
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
        // Xử lý callback khi người dùng thanh toán thành công
        Log::info('Momo Callback', $request->all());
        return response()->json(['status' => 'success']);
    }

    public function ipn(Request $request)
    {
        // Xử lý IPN (Instant Payment Notification) từ Momo
        Log::info('Momo IPN', $request->all());
        return response()->json(['status' => 'success']);
    }
}
