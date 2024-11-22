<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function getDoanhThu(){
        $orders            = Orders::with(['orderItems.product_sku.product'])->get();
        $tong              = 0;
        $doanhThuTheoThang = array_fill(1, 12, 0);
        foreach ($orders as $order){
            $tong                      += $order->total_payment;
            $month                     = $order->created_at->format('n');
            $doanhThuTheoThang[$month] += $order->total_payment;
        }

        return response()->json([
            'status' => TRUE,
            'data'   => [
                'doanh_thu' => $tong,
                'bieu_do'   => $doanhThuTheoThang
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }
}
