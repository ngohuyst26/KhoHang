<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrdersExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class OrderExportController extends Controller
{
    public function export()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }
}
