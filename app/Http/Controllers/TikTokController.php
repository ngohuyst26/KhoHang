<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Option;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\TikTokAccount;
use App\Models\TikTokProductLink;
use App\Models\UserTikTokAccount;
use App\Repositories\Product\ProductRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Fluent;


class TikTokController extends Controller{

    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository = $productRepository;
    }

    public function handleCallback(Request $request){
        $authCode  = $request->input('code');
        $subdomain = $request->input('state');
        $tenants   = Domain::where('domain', $subdomain . '.' . env('APP_DOMAIN'))->firstOrFail();
        if (!$tenants){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!'
            ]);
        }
        if (!$authCode){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Liên kết tài khoản thất bại không có mã code'
            ]);
        }
        $appKey    = config('services.tiktok.app_key');
        $appSecret = config('services.tiktok.app_secret');
        $url       = 'https://auth.tiktok-shops.com/api/v2/token/get';
        $response  = Http::get($url, [
            'app_key'    => $appKey,
            'app_secret' => $appSecret,
            'auth_code'  => $authCode,
            'grant_type' => 'authorized_code',
        ]);
        if ($response->ok()){
            $data = $response->collect();
            UserTikTokAccount::create([
                'subdomain' => $subdomain,
                'open_id'   => $data['data']['open_id'],
                'tenant_id' => $tenants->tenant_id
            ]);
            tenancy()->initialize($tenants->tenant_id);
            $apiPath   = '/authorization/202309/shops';
            $params    = [
                'app_key'   => $appKey,
                'timestamp' => time(),
            ];
            $sign      = $this->generateSignature($appSecret, $apiPath, $params);
            $timestamp = time();
            $shopRes   = Http::withHeaders([
                'content-type'       => 'application/json',
                'x-tts-access-token' => $data['data']['access_token']
            ])
                             ->get("https://open-api.tiktokglobalshop.com/authorization/202309/shops?app_key=$appKey&timestamp=$timestamp&sign=$sign");
            $shopInfo  = $shopRes->collect();


            TikTokAccount::updateOrCreate(
                [
                    'open_id' => $data['data']['open_id'],
                ]
                , [
                'account_tiktok_name' => $shopInfo['data']['shops']['0']['name'],
                'access_token'        => $data['data']['access_token'],
                'refresh_token'       => $data['data']['refresh_token'],
                'expires_in'          => $data['data']['access_token_expire_in'],
                'shop_cipher'         => $shopInfo['data']['shops']['0']['cipher'],
                'shop_id'             => $shopInfo['data']['shops']['0']['id']
            ]);
            tenancy()->end();

            return redirect(env('APP_METHOD') . "$subdomain." . env('URL_FRONT_END'));
        }

        return response()->json([
            'status'  => FALSE,
            'message' => 'Liên kết tài khoản thất bại'
        ]);
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

    public function getValidAccessToken($shopId){
        $tiktokAccount = TikTokAccount::where('shop_id', $shopId)->first();
        if (!$tiktokAccount){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Tài khoản TikTok không tồn tại',
            ]);
        }
        $expiresAt = Carbon::createFromTimestamp($tiktokAccount->expires_in, 'UTC');
        if (Carbon::now()->lessThan($expiresAt)){
            return $tiktokAccount->access_token;
        }

        $appKey    = config('services.tiktok.app_key');
        $appSecret = config('services.tiktok.app_secret');
        $url       = 'https://auth.tiktok-shops.com/api/v2/token/refresh';

        $response = Http::get($url, [
            'app_key'       => $appKey,
            'app_secret'    => $appSecret,
            'refresh_token' => $tiktokAccount->refresh_token,
            'grant_type'    => 'refresh_token',
        ]);

        if ($response->ok()){
            $data = $response->collect();

            $tiktokAccount->update([
                'access_token'  => $data['data']['access_token'],
                'refresh_token' => $data['data']['refresh_token'],
                'expires_in'    => time() + $data['data']['access_token_expire_in'],
            ]);

            return $data['data']['access_token'];
        }

        return response()->json([
            'status'  => FALSE,
            'message' => 'Làm mới access token thất bại',
        ]);
    }

    public function linkProductToTikTok(Request $request){
        $productSku    = ProductSku::findOrFail($request->product_sku_id);
        $accessToken   = $this->getValidAccessToken($request->shop_id);
        $tiktokAccount = TikTokAccount::where('shop_id', $request->shop_id)->firstOrFail();
        if (is_string($accessToken)){
            $url       = "https://open-api.tiktokglobalshop.com/product/202309/products/$request->product_tiktok_id";
            $timestamp = time();
            $appKey    = config('services.tiktok.app_key');
            $params    = [
                'app_key'     => $appKey,
                'timestamp'   => $timestamp,
                'shop_cipher' => $tiktokAccount->shop_cipher,
            ];
            $sign      = $this->generateSignature(config('services.tiktok.app_secret'),
                "/product/202309/products/$request->product_tiktok_id", $params);

            $response = Http::withHeaders([
                'x-tts-access-token' => $accessToken,
            ])
                            ->get("https://open-api.tiktokglobalshop.com/product/202309/products/$request->product_tiktok_id?app_key=$appKey&shop_cipher=$tiktokAccount->shop_cipher&timestamp=$timestamp&sign=$sign");

            if ($response->ok()){
                $tiktokData = $response->collect();
                foreach ($tiktokData['data']['skus'] as $sku){
                    if ($sku['id'] == $request->product_sku_tiktok_id){
                        TikTokProductLink::updateOrCreate(
                            ['sku_id' => $productSku->id],
                            [
                                'product_id'          => $request->product_id,
                                'shop_id'             => $request->shop_id,
                                'tiktok_product_id'   => $tiktokData['data']['id'],
                                'tiktok_product_name' => $tiktokData['data']['title'],
                                'tiktok_sku_id'       => $sku['id'],
                                'tiktok_sku_code'     => $sku['seller_sku'],
                                'price'               => $sku['price']['sale_price'],
                                'currency'            => $sku['price']['currency'],
                            ]
                        );

                    }
                }

                return response()->json([
                    'status'  => TRUE,
                    'message' => 'Liên kết sản phẩm thành công!',
                ]);
            }
        }

        return response()->json([
            'status'  => FALSE,
            'message' => 'Không thể liên kết sản phẩm với TikTok.',
        ]);
    }

    public function syncProductTikTok(Request $request){
        $product = Product::where('tiktok_product_id', '=', $request->tiktok_product_id)->get();
        if ($product->isEmpty()){
            $accessToken   = $this->getValidAccessToken($request->shop_id);
            $tiktokAccount = TikTokAccount::where('shop_id', $request->shop_id)->firstOrFail();
            if (is_string($accessToken)){
                $url       = "https://open-api.tiktokglobalshop.com/product/202309/products/$request->tiktok_product_id";
                $timestamp = time();
                $appKey    = config('services.tiktok.app_key');
                $params    = [
                    'app_key'     => $appKey,
                    'timestamp'   => $timestamp,
                    'shop_cipher' => $tiktokAccount->shop_cipher,
                ];
                $sign      = $this->generateSignature(config('services.tiktok.app_secret'),
                    "/product/202309/products/$request->tiktok_product_id", $params);

                $response = Http::withHeaders([
                    'x-tts-access-token' => $accessToken,
                ])
                                ->get("https://open-api.tiktokglobalshop.com/product/202309/products/$request->tiktok_product_id?app_key=$appKey&shop_cipher=$tiktokAccount->shop_cipher&timestamp=$timestamp&sign=$sign");

                if ($response->ok()){
                    $tiktokData = $response->collect();
                    if (count($tiktokData['data']['skus']) == 1){
                        $productCoppy    = [
                            'code'              => ProductSku::generateNextCode(),
                            'name'              => $tiktokData['data']['title'],
                            'price'             => $tiktokData['data']['skus']['0']['price']['sale_price'],
                            'sale_price'        => $tiktokData['data']['skus']['0']['price']['sale_price'],
                            'stock'             => $tiktokData['data']['skus']['0']['inventory']['0']['quantity'],
                            'category_id'       => NULL,
                            'supplier_id'       => NULL,
                            'description'       => $tiktokData['data']['description'],
                            'tiktok_product_id' => $request->tiktok_product_id
                        ];
                        $dataProduct     = new Fluent($productCoppy);
                        $responseProduct = $this->productRepository->addProductApi($dataProduct);

                        return response()->json([
                            'status'  => TRUE,
                            'data'    => $responseProduct,
                            'message' => 'Sao chép sản phẩm thành công!',
                        ]);
                    }
                    $coppy          = [
                        'code'              => ProductSku::generateNextCode(),
                        'name'              => $tiktokData['data']['title'],
                        'category_id'       => NULL,
                        'supplier_id'       => NULL,
                        'description'       => $tiktokData['data']['description'],
                        'tiktok_product_id' => $request->tiktok_product_id
                    ];
                    $optionVariants = [];
                    foreach ($tiktokData['data']['skus'] as $sku){
                        $optionItem = [];

                        foreach ($sku['sales_attributes'] as $option){
                            $optionId = Option::updateOrCreate(
                                ['name' => $option['name']],
                                ['created_at' => now(), 'updated_at' => now()]
                            );

                            $optionItem[] = [
                                'id'    => $optionId->id,
                                'value' => $option['value_name']
                            ];
                        }

                        $skusItem         = [
                            'options'    => $optionItem,
                            'barcode'    => 999999999,
                            'price'      => $sku['price']['sale_price'],
                            'sale_price' => $sku['price']['sale_price'],
                            'stock'      => $sku['inventory'][0]['quantity'],
                        ];
                        $optionVariants[] = $skusItem;
                    }

                    $variants        = ['variants' => $optionVariants];
                    $productCoppy    = array_merge($coppy, $variants);
                    $dataProduct     = new Fluent($productCoppy);
                    $responseProduct = $this->productRepository->addProductApi($dataProduct);

                    return response()->json([
                        'status'  => TRUE,
                        'data'    => $responseProduct,
                        'message' => 'Sao chép sản phẩm thành công!',
                    ]);
                }
            }

            return response()->json([
                'status'  => FALSE,
                'message' => 'Không thể sao chép sản phẩm với TikTok.',
            ]);
        }

        return response()->json([
            'status'  => FALSE,
            'message' => 'Sản phẩm đã tồn tại trong hệ thống',
        ]);
    }

    public function getAllProducts(){
        $allProducts    = [];
        $tiktokAccounts = TikTokAccount::all();

        foreach ($tiktokAccounts as $tiktokAccount){
            $accessToken = $this->getValidAccessToken($tiktokAccount->shop_id);
            if (is_string($accessToken)){
                $shopId     = $tiktokAccount->shop_id;
                $shopCipher = $tiktokAccount->shop_cipher;
                $products   = $this->getProductList($shopId, $shopCipher, $accessToken);

                if ($products && isset($products['data']['products'])){
                    $shopData = [
                        'shop_name' => $tiktokAccount->account_tiktok_name,
                        'shop_id'   => $shopId,
                        'products'  => []
                    ];

                    foreach ($products['data']['products'] as $product){
                        $productId      = $product['id'];
                        $productDetails = $this->getProductDetails($productId, $shopCipher,
                            $accessToken);
                        foreach ($productDetails['data']['skus'] as $index => $sku){
                            $productLink = TikTokProductLink::where('tiktok_sku_id', $sku['id'])
                                                            ->first();
                            if ($productLink){
                                $skuLink                                                = $this->productRepository->getOneSku($productLink->product_id,
                                    $productLink->sku_id);
                                $productDetails['data']['skus'][$index]['product_link'] = $skuLink->toArray();
                            }
                        }
                        //                        dd($productDetails);
                        $unsetArray = ['category_chains', 'is_cod_allowed', 'is_not_for_sale', 'manufacturer_ids', 'package_dimensions', 'package_weight', 'recommended_categories', 'responsible_person_ids', 'shipping_insurance_requirement', 'product_attributes'];
                        foreach ($unsetArray as $unset){
                            unset($productDetails['data']["$unset"]);
                        }
                        if ($productDetails && isset($productDetails['data'])){
                            $shopData['products'][] = $productDetails['data'];
                        }
                    }

                    $allProducts[] = $shopData;
                }
            }
        }

        return $allProducts;
    }

    public function getProductList($shopId, $shopCipher, $accessToken){
        $timestamp = time();
        $appKey    = config('services.tiktok.app_key');
        $appSecret = config('services.tiktok.app_secret');
        $params    = [
            'app_key'     => $appKey,
            'shop_cipher' => $shopCipher,
            'shop_id'     => $shopId,
            'timestamp'   => $timestamp,
        ];
        ksort($params);

        $apiPath = "/api/products/search";
        $body    = json_encode([
            "page_number" => 1,
            "page_size"   => 100,
        ]);

        $sign = $this->generateSignature($appSecret, $apiPath, $params, $body);

        $url      = "https://open-api.tiktokglobalshop.com/api/products/search";
        $response = Http::post($url . "?app_key={$appKey}&shop_cipher={$shopCipher}&shop_id={$shopId}&timestamp={$timestamp}&sign={$sign}&access_token=$accessToken",
            [
                "page_number" => 1,
                "page_size"   => 100,
            ]);
        if ($response->ok()){
            return $response->json();
        }else{
            Log::error('Failed to retrieve product list from TikTok',
                ['response' => $response->body()]);

            return NULL;
        }
    }

    public function getProductDetails($productId, $shopCipher, $accessToken){
        $timestamp = time();
        $appKey    = config('services.tiktok.app_key');
        $appSecret = config('services.tiktok.app_secret');

        $params = [
            'app_key'     => $appKey,
            'shop_cipher' => $shopCipher,
            'timestamp'   => $timestamp,
        ];
        ksort($params);

        $apiPath = "/product/202309/products/{$productId}";
        $sign    = $this->generateSignature($appSecret, $apiPath, $params);

        $url      = "https://open-api.tiktokglobalshop.com/product/202309/products/{$productId}";
        $response = Http::withHeaders([
            'x-tts-access-token' => $accessToken,
        ])
                        ->get($url . "?app_key={$appKey}&shop_cipher={$shopCipher}&timestamp={$timestamp}&sign={$sign}");
        if ($response->ok()){
            return $response->json();
        }else{
            Log::error('Failed to retrieve product details from TikTok',
                ['response' => $response->body()]);

            return NULL;
        }
    }

    public function unlinkTikTokAccounts(Request $request){
        try{
            $accountLink = TikTokAccount::where('shop_id', $request->shop_id)->firstOrFail();
            if ($accountLink){
                $accountLink->delete();

                return response()->json([
                    'status'  => TRUE,
                    'message' => 'Hủy liên kết tài khoản tiktok thành công!'
                ]);
            }
        }catch (\Exception $exception){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Hủy liên kết tài khoản tiktok thất bại!'
            ]);
        }
    }

    public function unlinkTikTokProduct(Request $request){
        try{
            $productLink = TikTokProductLink::where([['shop_id', '=', $request->shop_id], ['sku_id', '=', $request->product_sku_id], ['tiktok_sku_id', '=', $request->product_tiktok_sku]])
                                            ->firstOrFail();
            if ($productLink){
                $productLink->delete();

                return response()->json([
                    'status'  => TRUE,
                    'message' => 'Hủy liên kết sản phẩm tiktok thành công!'
                ]);
            }
        }catch (\Exception $exception){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Hủy liên kết sản phẩm tiktok thất bại!'
            ]);
        }
    }
}
