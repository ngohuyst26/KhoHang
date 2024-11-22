<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;

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

        return [
            'tong_doanh_thu'    => $tong,
            'bieu_do_doanh_thu' => $doanhThuTheoThang
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getLoiNhuan(){
        $orders            = Orders::with(['orderItems.product_sku'])->get();
        $tongLoiNhuan      = 0;
        $loiNhuanTheoThang = array_fill(1, 12, 0);
        foreach ($orders as $order){
            foreach ($order->orderItems as $item){
                $giaVon                    = $item->product_sku->price * $item->quantity;
                $doanhThu                  = $item->total_amount;
                $loiNhuan                  = $doanhThu - $giaVon;
                $tongLoiNhuan              += $loiNhuan;
                $month                     = $order->created_at->format('n');
                $loiNhuanTheoThang[$month] += $loiNhuan;
            }
        }

        return [
            'tong_loi_nhuan'    => $tongLoiNhuan,
            'bieu_do_loi_nhuan' => $loiNhuanTheoThang
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getKhachHang(){
        $totalCustomers = User::count();

        $customersByMonth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                                ->groupByRaw('MONTH(created_at)')
                                ->orderByRaw('MONTH(created_at)')
                                ->get()
                                ->pluck('count', 'month');

        $monthlyData = [];
        for ($i = 1; $i <= 12; $i ++){
            $monthlyData[$i] = $customersByMonth->get($i, 0);
        }

        return [
            'tong_khach_hang'    => $totalCustomers,
            'bieu_do_khach_hang' => $monthlyData,
        ];
    }

    public function getDonHang(){
        $totalCustomers = Orders::count();

        $customersByMonth = Orders::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                                  ->groupByRaw('MONTH(created_at)')
                                  ->orderByRaw('MONTH(created_at)')
                                  ->get()
                                  ->pluck('count', 'month');

        $monthlyData = [];
        for ($i = 1; $i <= 12; $i ++){
            $monthlyData[$i] = $customersByMonth->get($i, 0);
        }

        return [
            'tong_don_hang'    => $totalCustomers,
            'bieu_do_don_hang' => $monthlyData,
        ];
    }


    /**
     * Display the specified resource.
     */
    public function dashboard(){
        $loiNhuan  = $this->getLoiNhuan();
        $doanhThu  = $this->getDoanhThu();
        $khachHang = $this->getKhachHang();
        $donHang   = $this->getDonHang();

        return response()->json([
            'status' => TRUE,
            'data'   => [
                'tong_doanh_thu'     => $doanhThu['tong_doanh_thu'],
                'tong_loi_nhuan'     => $loiNhuan['tong_loi_nhuan'],
                'tong_khach_hang'    => $khachHang['tong_khach_hang'],
                'tong_don_hang'      => $donHang['tong_don_hang'],
                'bieu_do_doanh_thu'  => $doanhThu['bieu_do_doanh_thu'],
                'bieu_do_loi_nhuan'  => $loiNhuan['bieu_do_loi_nhuan'],
                'bieu_do_khach_hang' => $khachHang['bieu_do_khach_hang'],
                'bieu_do_don_hang'   => $donHang['bieu_do_don_hang']
            ]
        ]);

    }

}
