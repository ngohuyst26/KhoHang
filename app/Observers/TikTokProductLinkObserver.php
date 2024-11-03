<?php

namespace App\Observers;

use App\Http\Controllers\TikTokController;
use App\Models\ProductSku;
use App\Models\TikTokAccount;
use App\Models\TikTokProductLink;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TikTokProductLinkObserver{

    public function created(TikTokProductLink $tiktokProductLink){
        $this->syncProductToTikTok($tiktokProductLink);
    }

    public function updated(TikTokProductLink $tiktokProductLink){
        $this->syncProductToTikTok($tiktokProductLink);
    }

    protected function syncProductToTikTok(TikTokProductLink $tiktokProductLink){
        try{
            $tiktokAccount = TikTokAccount::where('shop_id', $tiktokProductLink->shop_id)
                                          ->firstOrFail();
            $accessToken   = app(TikTokController::class)->getValidAccessToken($tiktokProductLink->shop_id);

            $productSku = ProductSku::find($tiktokProductLink->sku_id);

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
                                    "quantity" => $productSku->inventory,
                                ]
                            ]
                        ]
                    ]
                ]);
                $baseString .= $body;
                $baseString .= $appSecret;

                $sign = hash_hmac('sha256', $baseString, $appSecret);

                Log::info('Sign: ', ['sign' => $sign]);

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
                                                        "quantity" => $productSku->inventory,
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]);

                if (!$response->ok()){
                    Log::error('Inventory sync failed', ['response' => $response->body()]);
                }
            }
        }catch (\Exception $e){
            Log::error('Error syncing product to TikTok: ' . $e->getMessage());
        }
    }
}
