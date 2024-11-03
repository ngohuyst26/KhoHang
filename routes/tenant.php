<?php

declare(strict_types = 1);

use App\Http\Controllers\API\Admin\BrandController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\CustomerController;
use App\Http\Controllers\API\Admin\DepartmentController;
use App\Http\Controllers\API\Admin\ImportGoodsController;
use App\Http\Controllers\API\Admin\OrderController;
use App\Http\Controllers\API\Admin\StaffController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\API\Auth\AuthTenantController;
use App\Http\Controllers\Api\CheckStockController;
use App\Http\Controllers\API\OptionController;
use App\Http\Controllers\Api\ProductController;
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
    Route::prefix('tiktok')->group(function (){

        Route::get('/callback', [TikTokController::class, 'handleCallback'])
             ->name('tiktok.callback');

        Route::get('/access-token/{userId}', [TikTokController::class, 'getValidAccessToken'])
             ->name('tiktok.access_token');

        Route::post('/link-product', [TikTokController::class, 'linkProductToTikTok'])
             ->name('tiktok.link_product');

        Route::get('/list-product', [TikTokController::class, 'getAllProducts'])
             ->name('tiktok.list_product');

        Route::post('/sync-product', [TikTokController::class, 'syncProductTikTok'])
             ->name('tiktok.sync_product');


    });

    Route::middleware('auth:api')->group(function (){
        Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
        Route::post('product/create', [ProductController::class, 'store']);
        Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
        Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
        Route::post('product/restore/{product}', [ProductController::class, 'restore']);
        Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');

        Route::get('checkstock', [CheckStockController::class, 'index']);
        Route::get('checkstock/{checkstock}', [CheckStockController::class, 'show']);
        Route::post('checkstock/create', [CheckStockController::class, 'store']);
        Route::put('checkstock/update/{checkstock}', [CheckStockController::class, 'update']);
        Route::delete('checkstock/delete/{checkstock}', [CheckStockController::class, 'cancel']);

        Route::resource('import-goods', ImportGoodsController::class);
        Route::resource('option', OptionController::class);
        Route::resource('customers', CustomerController::class);
        Route::resource('suppliers', SupplierController::class);
        Route::resource('orders', OrderController::class);
        Route::get('orders/restore/{id}', [OrderController::class, 'restore']);
        Route::resource('categories', CategoryController::class);
        Route::resource('job-titles', BrandController::class);
        Route::resource('departments', DepartmentController::class);
        Route::resource('staffs', StaffController::class);
    });

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

