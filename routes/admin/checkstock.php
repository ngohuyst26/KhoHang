<?php

use App\Http\Controllers\Admin\CheckStockController;
use Illuminate\Support\Facades\Route;


Route::resource('check-stocks', CheckStockController::class);
