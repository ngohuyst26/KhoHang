<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::orderBy('id','desc')->where('status','1')->paginate(10);
        if ($request->ajax()) {
            return view('pages.admin.customers.pagination', compact('customers'))->render();
        }

        return view('pages.admin.customers.index', [
            'customers' => $customers
        ]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ],
        [
            'required' => 'Dữ liệu không được trống!',
            'max' => 'Dữ liệu'
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['errors' => $validator->errors()]);
            }
        }
        $product = Customer::create($request->all());

        if ($request->ajax()) {
            $customers = Customer::orderBy('id','desc')->where('status','1')->paginate(10);
            return view('pages.admin.customers.pagination', ['customers'=>$customers])->render();
        }
        return redirect('customers.index');
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
        $customers = Customer::findOrFail($id);
        return response()->json($customers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->status !== null){
            $acreage_range         = AcreageRange::findOrFail($id);
            $acreage_range->status = $request->status;
            $acreage_range->save();

            return response()->json([
                'status' => true,
                'errors' => [],
            ]);
        }

        $validator = Validator::make($request->all(),
            [
                'name'       => 'required|string|max:255',
                'min_acreage'  => 'required|integer|min:0',
                'max_acreage'  => 'required|integer|gt:min_acreage',
            ],
            [
                'required'       => 'Dữ liệu không được trống!',
                'integer'        => 'Gia trị phải là số',
                'name.string'    => 'Giá trị phải là chuổi!',
                'name.max'       => 'Giá trị phải nhỏ hơn :max kí tự!',
                'min_acreage.min'  => 'Giá trị phải nhỏ hơn :min kí tự!',
                'gt'            => 'Giá max phải lớn hơn giá min!'
            ]
        );

        if ($validator->passes()) {
            $acreage_range              = AcreageRange::findOrFail($id);
            $acreage_range->name        = $request->name;
            $acreage_range->min_acreage = $request->min_acreage;
            $acreage_range->max_acreage = $request->max_acreage;
            $acreage_range->save();

            return response()->json([
                'status' => true,
                'errors' => [],
            ]);
        }

        return response()->json([
            'status' => false,
            'errors' => $validator->errors(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $acreage_range = AcreageRange::findOrFail($id);
        $acreage_range->delete();

        return response()->json([
            'status' => true
        ]);
    }
}
