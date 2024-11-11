<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class WalletController extends Controller
{
    public function getBalance(){
        $wallet = auth()->user()->wallet;
        return response()->json([
            'status'  => true,
            'message' => "Thông tin số dư",
            'data'    => [
                'balance' => $wallet->balance
            ]
        ],200);
    }
    public function createMomoPayment(Request $request)
    {
        if ($request->input('user_id') != auth()->user()->id){
            return response()->json([
                'status' => FALSE,
                'message' => "Không có quyền nạp tiền cho tài khoản này"
            ],403);
        }
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $endpoint = env('MOMO_ENDPOINT');

        $orderId = time(); // Hoặc bạn có thể dùng ID khác của đơn hàng
        $orderInfo = "Thanh toán qua Momo ATM";
        $amount = $request->input('amount');
        $redirectUrl = route('wallet.momoCallback');
        $ipnUrl = route('wallet.ipn');
        $extraData  = $request->input('user_id');

        // Tạo signature
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$orderId&requestType=payWithATM";
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
            'extraData' => $extraData,
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
        $orderId = $request->input('orderId');
        $resultCode = $request->input('resultCode');

        if ($resultCode == 0) {
            $user = User::find($request->input('extraData'));

            $wallet = $user->wallet;

            if ($wallet) {
                $wallet->balance += $request->input('amount');
                $wallet->save();
            }

            return redirect(env('APP_METHOD') . tenant()->domain_name . "." . env('URL_SUCCESS_MOMO'));
        } else {
            return redirect(env('APP_METHOD') . tenant()->domain_name. "." . env('URL_FAIL_MOMO'));
        }
    }

    public function ipn(Request $request)
    {
        Log::info('Momo IPN', $request->all());
        return response()->json(['status' => 'success']);
    }

    public function createVnpayPayment(Request $request){
        $user_id = $request->input('user_id');
        if ($user_id != auth()->user()->id){
            return response()->json([
                'status' => FALSE,
                'message' => "Không có quyền nạp tiền cho tài khoản này"
            ],403);
        }

        $vnp_TmnCode = env('VNP_TMN_CODE');
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_Url = env('VNP_URL');
        $vnp_ReturnUrl = route('wallet.vnpayReturn');
        $vnp_TxnRef = Str::uuid();
        $vnp_OrderInfo = $user_id;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->input('amount') * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = $request->ip();

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => now()->format('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return response()->json(['payment_url' => $vnp_Url], 200);
    }

    public function vnpayReturn(Request $request)
    {
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_ResponseCode = $request->vnp_ResponseCode;
        $vnp_SecureHash = $request->vnp_SecureHash;

        $inputData = array();
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($vnp_ResponseCode == '00') {

                $user = User::findOrFail($request->input('vnp_OrderInfo'));
                $wallet = $user->wallet;

                if ($wallet) {
                    $wallet->balance += $request->input('vnp_Amount')/100;
                    $wallet->save();
                }

                return redirect(env('APP_METHOD') . tenant()->domain_name. "."  . env('URL_SUCCESS_VNPAY'));
            }
            else {
                return redirect(env('APP_METHOD') . tenant()->domain_name. "."  . env('URL_FAIL_VNPAY'));
            }
        } else {
            return redirect(env('APP_METHOD') . tenant()->domain_name. "."  . env('URL_FAIL_VNPAY'));
        }
    }
}
