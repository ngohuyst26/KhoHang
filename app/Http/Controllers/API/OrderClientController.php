<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderClientController extends Controller
{
    public function index() {
        $user = auth()->user();
        $orders  = Orders::where('user_id',$user->id)->paginate(5);

        return response()->json([
            'status'  => 200,
            'message' => "Danh sách thương hiệu",
            'data'    => $orders
        ], 200);
    }
}
