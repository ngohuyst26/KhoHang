<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request){
    $user = [
        'name' => 'Ngô Huy',
        'age'  => 21
    ];

    return response()->json($user);
});
