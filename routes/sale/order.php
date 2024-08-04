<?php
use App\Http\Controllers\Sale\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('orders', OrderController::class);