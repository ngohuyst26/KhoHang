<?php

namespace App\Http\Controllers;

use App\Models\ReturnPolicy;
use Illuminate\Http\Request;

class ReturnPolicyController extends Controller{

    public function store(Request $request){
        $return = ReturnPolicy::first();
        $update = ReturnPolicy::find($return->id);
        $update->update([
            'return_policy' => $request->return_policy
        ]);

        return response()->json([
            'status' => TRUE,
            'data'   => ReturnPolicy::first()
        ]);

    }

    public function show(){
        return ReturnPolicy::first();
    }
}
