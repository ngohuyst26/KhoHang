<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UpgradeTenantController extends Controller
{
    public function upgradePlanByMomo(Request $request){
        $tenant_id = $request->input('tenant_id');
        if (tenant()->id != $tenant_id){
            return response()->json([
                'status' => FALSE,
                'message' => "Không thể nâng cấp cho người thuê này"
            ],403);
        }


        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $endpoint = env('MOMO_ENDPOINT');
        $orderId = time();
        $orderInfo = "Thanh toán qua Momo ATM";
        $amount = 400000;
        $redirectUrl = route('momo.return.plan');
        $ipnUrl = route('wallet.ipn');
        $rawHash = "accessKey=$accessKey&amount=$amount&extraData=$tenant_id&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$orderId&requestType=payWithATM";
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
            'extraData' => $tenant_id,
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
    
    public function callbackMomoPlan(Request $request){
        $resultCode = $request->input('resultCode');
        $tenant_id = $request->input('extraData');
        if ($resultCode == 0) {
            $tenant = Tenant::findOrFail($tenant_id);

            if ($tenant->trial_ends_at && now()->lessThanOrEqualTo($tenant->trial_ends_at)) {
                $tenant->trial_ends_at = null;
            }
            $tenant->has_used_trial = 0;
            $tenant->plan = 'premium';
            $tenant->subscription_ends_at = now()->addDays(30);
            $tenant->save();

            return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_SUCCESS_MOMO'). '?type=upgrade');
        } else {
            return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain  . env('URL_FAIL_MOMO'). '?type=upgrade');
        }
    }

    public function upgradePlanByVnpay(Request $request){
        $tenant_id = $request->input('tenant_id');
        if ($tenant_id != tenant()->id){
            return response()->json([
                'status' => FALSE,
                'message' => "Không thể nâng cấp cho người thuê này"
            ],403);
        }

        $vnp_TmnCode = env('VNP_TMN_CODE');
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_Url = env('VNP_URL');
        $vnp_ReturnUrl = route('vnpay.return.plan');
        $vnp_TxnRef = Str::uuid();
        $vnp_OrderInfo = $tenant_id;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 400000 * 100;
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

    public function returnVnpayPlan(Request $request){
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
                $tenant_id = $request->input('vnp_OrderInfo');
                $tenant = Tenant::findOrFail($tenant_id);
                if ($tenant->trial_ends_at && now()->lessThanOrEqualTo($tenant->trial_ends_at)) {
                    $tenant->trial_ends_at = null;
                }
                $tenant->has_used_trial = 0;
                $tenant->subscription_ends_at = now()->addDays(30);
                $tenant->plan = 'premium';
                $tenant->save();

                return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_SUCCESS_VNPAY'));
            }
            else {
                return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_FAIL_VNPAY'));
            }
        } else {
            return redirect(env('APP_METHOD') . tenant()->domains()->first()->domain . env('URL_FAIL_VNPAY'));
        }
    }
}
