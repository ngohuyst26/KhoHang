<?php

namespace App\Observers;

use App\Http\Controllers\TikTokController;
use App\Models\ProductSku;
use App\Models\TikTokAccount;
use App\Models\TikTokProductLink;
use Illuminate\Support\Facades\Http;

class ProductSkuObserver{

    public function updated(ProductSku $productSku){
        if ($productSku->isDirty('inventory')){
            $tiktokProductLink = TikTokProductLink::where('sku_id', $productSku->id)->first();
            if ($tiktokProductLink){
                \Log::info('Thông tin ProductSku', $tiktokProductLink->toArray());
                $tiktokAccount = TikTokAccount::where('shop_id', $tiktokProductLink->shop_id)
                                              ->firstOrFail();
                $accessToken   = app(TikTokController::class)->getValidAccessToken($tiktokProductLink->shop_id);
                \Log::info('Access Token: ', ['accessToken' => $accessToken]);
                if (is_string($accessToken)){
                    $productId  = $tiktokProductLink->tiktok_product_id;
                    $url        = "https://open-api.tiktokglobalshop.com/product/202309/products/{$productId}/inventory/update";
                    $timestamp  = time();
                    $appKey     = config('services.tiktok.app_key');
                    $appSecret  = config('services.tiktok.app_secret');
                    $shopCipher = $tiktokAccount->shop_cipher;
                    $params     = [
                        'app_key'     => $appKey,
                        'timestamp'   => $timestamp,
                        'shop_cipher' => $shopCipher,
                    ];
                    ksort($params);

                    $apiPath    = "/product/202309/products/{$productId}/inventory/update";
                    $baseString = $appSecret . $apiPath;

                    foreach ($params as $key => $value){
                        $baseString .= $key . $value;
                    }

                    $body       = json_encode([
                        "skus" => [
                            [
                                "id"        => $tiktokProductLink->tiktok_sku_id,
                                "inventory" => [
                                    [
                                        "quantity" => intval($productSku->inventory),
                                    ]
                                ]
                            ]
                        ]
                    ]);
                    $baseString .= $body;

                    $baseString .= $appSecret;

                    $sign = hash_hmac('sha256', $baseString, $appSecret);

                    \Log::info('Sign: ', ['sign' => $sign]);
                    $response = Http::withHeaders([
                        'x-tts-access-token' => $accessToken,
                    ])
                                    ->post($url . "?app_key={$appKey}&sign={$sign}&timestamp={$timestamp}&shop_cipher={$shopCipher}",
                                        [
                                            "skus" => [
                                                [
                                                    "id"        => $tiktokProductLink->tiktok_sku_id,
                                                    "inventory" => [
                                                        [
                                                            "quantity" => intval($productSku->inventory),
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]);
                    \Log::error('Inventory update failed',
                        ['response' => intval($productSku->inventory)]);

                    if (!$response->ok()){
                        \Log::error('Inventory update failed', ['response' => $response->body()]);
                    }
                }
            }
        }
    }

    public function generateSignature($appSecret, $apiPath, $params, $body = ''){
        unset($params['access_token'], $params['sign']);
        ksort($params);
        $baseString = $appSecret . $apiPath;
        foreach ($params as $key => $value){
            $baseString .= $key . $value;
        }
        if (!empty($body)){
            $baseString .= $body;
        }
        $baseString .= $appSecret;
        $digest     = hash_hmac('sha256', $baseString, $appSecret, FALSE);

        return $digest;
    }


}
