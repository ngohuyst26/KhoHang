<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderClientController extends Controller
{
    public function index() {
        $user = auth()->user();
        $orders  = Orders::orderBy('id','desc')->where('user_id',$user->id)->with('orderItems')->paginate(5);

        return response()->json([
            'status'  => 200,
            'message' => "Danh sách orders",
            'data'    => $orders
        ], 200);
    }
}
