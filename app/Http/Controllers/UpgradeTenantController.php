<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UpgradeTenantController extends Controller
{
    public function upgradePlanByMomo(Request $request, $tenant_id){
        if (tenant()->id != $tenant_id){
            return response()->json([
                'status' => FALSE,
                'message' => "Không thể nâng cấp cho người thuê này"
            ],403);
        }

        $tenant = Tenant::findOrFail($tenant_id);
        if ($tenant->plan != 'basic') {
            return response()->json(['message' => 'Đã nâng cấp gói này'], 400);
        }

        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $endpoint = env('MOMO_ENDPOINT');
        $orderId = time();
        $orderInfo = "Thanh toán qua Momo ATM";
        $amount = 300000;
        $redirectUrl = route('momo.callback');
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
    
    public function callbackMomo(Request $request){
        $resultCode = $request->input('resultCode');
        $tenant_id = $request->input('extraData');
        if ($resultCode == 0) {
            $tenant = Tenant::findOrFail($tenant_id);
            $tenant->plan = 'premium';
            $tenant->save();

            return redirect(env('APP_METHOD') . tenant()->domain_name. "." . env('URL_SUCCESS_MOMO'));
        } else {
            return redirect(env('APP_METHOD') . tenant()->domain_name. "."  . env('URL_FAIL_MOMO'));
        }
    }
}
