<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.sale.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $querySearch = $request->input('query');
        $productSkus = \App\Models\ProductSku::where('barcode', 'LIKE', "%$querySearch%")->with('product','photo','skuValue.optionValue')
                                             ->orWhereHas('product', function ($query) use ($querySearch) {
                                                 $query->where('name', 'like', "%$querySearch%");
                                             })
                                             ->orWhereHas('skuValue.optionValue', function ($query) use ($querySearch) {
                                                 $query->where('name', 'like', "%$querySearch%");
                                             })
                                             ->get();
        return response()->json($productSkus);
    }
}
