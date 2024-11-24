<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller{

    public function store(Request $request){
        $privacy = PrivacyPolicy::first();
        $update  = PrivacyPolicy::find($privacy->id);
        $update->update([
            'privacy_policy' => $request->privacy_policy
        ]);

        return response()->json([
            'status' => TRUE,
            'data'   => PrivacyPolicy::first()
        ]);

    }

    public function show(){
        return PrivacyPolicy::first();
    }
}
