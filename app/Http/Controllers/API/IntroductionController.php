<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Introduction;
use Illuminate\Http\Request;

class  IntroductionController extends Controller{

    public function store(Request $request){
        $introductions = Introduction::first();
        $update        = Introduction::find($introductions->id);
        $update->update([
            'introductions' => $request->introductions
        ]);

        return response()->json([
            'status' => TRUE,
            'data'   => Introduction::first()
        ]);

    }

    public function show(){
        return Introduction::first();
    }
}