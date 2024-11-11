<?php

declare(strict_types = 1);

use App\Http\Controllers\API\Admin\BrandController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\CustomerController;
use App\Http\Controllers\API\Admin\ImportGoodsController;
use App\Http\Controllers\API\Admin\OrderController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\API\Auth\AuthTenantController;
use App\Http\Controllers\Api\CheckStockController;
use App\Http\Controllers\API\OptionController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Payment\MomoPaymentController;
use App\Http\Controllers\Payment\VnpayPaymentController;
use App\Http\Controllers\Payment\WalletController;
use App\Http\Controllers\Payment\WalletPaymentController;
use App\Http\Controllers\TikTokController;
use App\Http\Controllers\UpgradeTenantController;
use App\Http\Middleware\VerifyTenantToken;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'api',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->prefix('api')->group(function (){
    Route::get('products', [ProductController::class, 'index']);
    Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
    Route::prefix('tiktok')->group(function (){
        Route::get('/callback', [TikTokController::class, 'handleCallback'])
             ->name('tiktok.callback');
        Route::middleware(['auth:api', VerifyTenantToken::class])->group(function (){
            Route::get('/access-token/{userId}', [TikTokController::class, 'getValidAccessToken'])
                 ->name('tiktok.access_token');

            Route::post('/link-product', [TikTokController::class, 'linkProductToTikTok'])
                 ->name('tiktok.link_product');

            Route::get('/list-product', [TikTokController::class, 'getAllProducts'])
                 ->name('tiktok.list_product');

            Route::post('/sync-product', [TikTokController::class, 'syncProductTikTok'])
                 ->name('tiktok.sync_product');

            Route::post('/unlink-account-tiktok', [TikTokController::class, 'unlinkTikTokAccounts'])
                 ->name('tiktok.unlink_account');

            Route::post('/unlink-product-tiktok', [TikTokController::class, 'unlinkTikTokProduct'])
                 ->name('tiktok.unlink_product_tiktok');

            Route::get('/account-tiktok-link', [TikTokController::class, 'listAccountTikTok'])
                 ->name('tiktok.list_account_tiktok');
        });
    });

    Route::middleware(['auth:api', VerifyTenantToken::class])->group(function (){
        Route::group(['middleware' => ['role:admin']], function (){
            Route::post('product/create', [ProductController::class, 'store']);
            Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
            Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
            Route::post('product/restore/{product}', [ProductController::class, 'restore']);
            Route::get('product/{id}', [ProductController::class, 'getOneProduct']);
            Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');
            Route::get('checkstock', [CheckStockController::class, 'index']);
            Route::get('checkstock/{checkstock}', [CheckStockController::class, 'show']);
            Route::post('checkstock/create', [CheckStockController::class, 'store']);
            Route::put('checkstock/update/{checkstock}', [CheckStockController::class, 'update']);
            Route::delete('checkstock/delete/{checkstock}',
                [CheckStockController::class, 'cancel']);
            Route::resource('import-goods', ImportGoodsController::class);
            Route::resource('option', OptionController::class);
            Route::resource('user', UserController::class)->only([
                'index','create', 'store', 'destroy', 'edit'
            ]);
            Route::resource('suppliers', SupplierController::class);
            Route::get('orders/restore/{id}', [OrderController::class, 'restore']);
            Route::resource('orders', OrderController::class)->only([
                'create', 'update', 'destroy', 'edit'
            ]);
            Route::resource('categories', CategoryController::class)->only([
                'show', 'create', 'store', 'update', 'destroy', 'edit'
            ]);
            Route::resource('suppliers', SupplierController::class)->only([
                'show', 'create', 'store', 'update', 'destroy', 'edit'
            ]);
            Route::resource('brands', BrandController::class)->only([
                'show', 'create', 'store', 'update', 'destroy', 'edit'
            ]);

            Route::post('upgrade-plan-momo/',[UpgradeTenantController::class,'upgradePlanByMomo']);
            Route::get('/plan-momo-return', [UpgradeTenantController::class, 'callbackMomoPlan'])
                 ->name('momo.return.plan')
                 ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);

            Route::post('upgrade-plan-vnpay/',[UpgradeTenantController::class,'upgradePlanByVnpay']);
            Route::get('/plan-vnpay-return', [UpgradeTenantController::class, 'returnVnpayPlan'])
                 ->name('vnpay.return.plan')
                 ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);
        });

        Route::resource('/user', UserController::class);
        //Order
        Route::post('/pay-order', [WalletPaymentController::class, 'payOrder']);

        //VNPay
        Route::post('/vnpay/payment', [VnpayPaymentController::class, 'createPayment'])
             ->name('payment.create');
        Route::get('/vnpay-return', [VnpayPaymentController::class, 'vnpayReturn'])
             ->name('vnpay.return')
             ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);

        //Momo
        Route::post('/momo/payment', [MomoPaymentController::class, 'createPayment']);
        Route::get('/momo/callback', [MomoPaymentController::class, 'callback'])
             ->name('momo.callback')
             ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);
        Route::get('/momo/ipn', [MomoPaymentController::class, 'ipn'])->name('momo.ipn');

        //Wallet MOMO
        Route::post('/wallet/momo-deposit', [WalletController::class, 'createMomoPayment']);
        Route::get('/wallet/momo-callback', [WalletController::class, 'callback'])
             ->name('wallet.momoCallback')
             ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);
        Route::get('/wallet/momo-ipn', [WalletController::class, 'ipn'])->name('wallet.ipn');

        //Wallet VNPAY
        Route::post('/wallet/vnpay-deposit', [WalletController::class, 'createVnpayPayment']);
        //Route::get('/wallet/vnpay-ipn', [WalletController::class, 'ipn'])->name('wallet.ipn');
        Route::get('/wallet/vnpay-return', [WalletController::class, 'vnpayReturn'])
             ->name('wallet.vnpayReturn')
             ->withoutMiddleware(['auth:api', VerifyTenantToken::class]);

        Route::get('/wallet/get-balance', [WalletController::class, 'getBalance']);

        Route::resource('orders', OrderController::class)->only([
            'index', 'store', 'show'
        ]);

        Route::resource('customers', CustomerController::class)->only([
           'update', 'show'
        ]);

        Route::resource('categories', CategoryController::class)->only([
            'index',
        ]);
        Route::resource('suppliers', SupplierController::class)->only([
            'index',
        ]);
        Route::resource('brands', BrandController::class)->only([
            'index'
        ]);

    });


    Route::prefix('auth')->group(function (){
        Route::post('/register', [AuthTenantController::class, 'register'])->name('register');
        Route::post('/login', [AuthTenantController::class, 'login'])->name('login');
        Route::post('/logout', [AuthTenantController::class, 'logout'])
             ->middleware('auth:api')
             ->name('logout');
        Route::post('/refresh', [AuthTenantController::class, 'refresh'])
             ->middleware('auth:api')
             ->name('refresh');
        Route::post('/me', [AuthTenantController::class, 'me'])->middleware('auth:api')->name('me');

        Route::prefix('system')->group(function (){
            Route::post('/login', [AuthTenantController::class, 'login'])->name('login');
            Route::post('/logout', [AuthTenantController::class, 'logout'])
                 ->middleware('auth:api')
                 ->name('logout');
        });
    });
});

