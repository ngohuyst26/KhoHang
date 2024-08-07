<?php

use App\Http\Controllers\Admin\OptionController;
use Illuminate\Support\Facades\Route;


Route::resource('options', OptionController::class);
