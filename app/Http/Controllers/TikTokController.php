<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\TikTokAccount;
use App\Models\TikTokProductLink;
use App\Repositories\Product\ProductRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Fluent;

class TikTokController extends Controller{

    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository = $productRepository;
    }

    public function handleCallback(Request $request){
        $authCode = $request->input('code');
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
        //Tạo một bảng lưu tất cả các open_id của người dùng vào, trong bảng lưu gồm domain của người đó và open_id của họ
        //khi nhận được webhook từ tiktok thì sẽ dùng open_id trong webhook
        //        dd($response->collect());
        if ($response->ok()){
            $data      = $response->collect();
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


            TikTokAccount::create([
                'user_id'             => 1,
                'account_tiktok_name' => $shopInfo['data']['shops']['0']['name'],
                'access_token'        => $data['data']['access_token'],
                'refresh_token'       => $data['data']['refresh_token'],
                'expires_in'          => $data['data']['access_token_expire_in'],
                'shop_cipher'         => $shopInfo['data']['shops']['0']['cipher'],
                'shop_id'             => $shopInfo['data']['shops']['0']['id'],
            ]);

            return response()->json([
                'status'  => TRUE,
                'message' => 'Liên kết tài khoản thành công'
            ]);
        }

        return response()->json([
            'status'  => FALSE,
            'message' => 'Liên kết tài khoản thất bại'
        ]);
    }

    function generateSignature($appSecret, $apiPath, $params){
        unset($params['access_token'], $params['sign']);
        ksort($params);
        $baseString = $apiPath;
        foreach ($params as $key => $value){
            $baseString .= $key . $value;
        }
        $stringToSign = $appSecret . $baseString . $appSecret;
        $digest       = hash_hmac('sha256', $stringToSign, $appSecret, FALSE);

        return $digest;
    }

    public function getValidAccessToken($userId){
        $tiktokAccount = TikTokAccount::where('user_id', $userId)->first();

        if (!$tiktokAccount){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Tài khoản TikTok không tồn tại',
            ]);
        }

        $expiresAt = Carbon::createFromTimestamp($tiktokAccount->expires_in);
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

            // Cập nhật lại access_token và thời gian hết hạn trong database
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
        $accessToken   = $this->getValidAccessToken(1);
        $tiktokAccount = TikTokAccount::where('user_id', '=', 1)->firstOrFail();
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
            $accessToken   = $this->getValidAccessToken(1);
            $tiktokAccount = TikTokAccount::where('user_id', '=', 1)->firstOrFail();
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
                    //                    dd(count($tiktokData['data']['skus']));
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

}
