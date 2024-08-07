<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('query');
        $customers = Customer::where('name', 'LIKE', "%{$query}%")->orWhere('phone', 'LIKE', "%{$query}%")->limit(5)->get();

        return response()->json($customers);
    }
}
