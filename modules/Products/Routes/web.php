<?php

use Module\Products\Http\Controllers\ProductsController;

Route::get('products/', [ProductsController::class, 'index']);
