<?php

use App\Http\Controllers\API\Admin\BrandController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\CustomerController;
use App\Http\Controllers\API\Admin\DepartmentController;
use App\Http\Controllers\API\Admin\ImportGoodsController;
use App\Http\Controllers\API\Admin\OrderController;
use App\Http\Controllers\API\Admin\StaffController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\Api\CheckStockController;
use App\Http\Controllers\API\OptionController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\VerifyEmailController;


Route::get('products', [ProductController::class, 'index']);
Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
Route::post('product/create', [ProductController::class, 'store']);
Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
Route::post('product/restore/{product}', [ProductController::class, 'restore']);
Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');

//Route::get('products', [ProductController::class, 'index']);
//Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
//Route::post('product/create', [ProductController::class, 'store']);
//Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
//Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
//Route::post('product/restore/{product}', [ProductController::class, 'restore']);
//
//
//Route::get('checkstock', [CheckStockController::class, 'index']);
//Route::get('checkstock/{checkstock}', [CheckStockController::class, 'show']);
//Route::post('checkstock/create', [CheckStockController::class, 'store']);
//Route::put('checkstock/update/{checkstock}', [CheckStockController::class, 'update']);
//Route::delete('checkstock/delete/{checkstock}', [CheckStockController::class, 'cancel']);
//
//
//Route::resource('import-goods', ImportGoodsController::class);
//Route::resource('option', OptionController::class);
//
//Route::resource('customers', CustomerController::class);
//Route::resource('customers', CustomerController::class);
//Route::resource('suppliers', SupplierController::class);
//Route::resource('orders', OrderController::class);
//Route::resource('categories', CategoryController::class);
//Route::resource('brands', BrandController::class);
//Route::resource('job-titles', BrandController::class);
//Route::resource('departments', DepartmentController::class);
//Route::resource('staffs', StaffController::class);
//
//Route::group([
//    'middleware' => 'api',
//    'prefix' => 'auth'
//], function ($router) {
//    Route::post('/register', [AuthController::class, 'register'])->name('register');
//    Route::post('/login', [AuthController::class, 'login'])->name('login');
//    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
//    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
//    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
//});
