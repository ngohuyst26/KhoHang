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
        $status = $request->filter === 'trash' ? '0' : '1';
        $customers = Customer::orderBy('id','desc')
                             ->where('status',$status)
                             ->paginate(10);

        if ($request->ajax()) {
            return view('pages.admin.customers.pagination', [
                'customers' => $customers,
            ])->render();
        }

        return view('pages.admin.customers.index', [
            'customers' => $customers,
            'status' => $status
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

        Customer::create($request->all());

        if ($request->ajax()) {
            $customers = Customer::orderBy('id','desc')
                                 ->where('status','1')
                                 ->paginate(10);
            return view('pages.admin.customers.pagination', [
                'customers'=>$customers,
                'status' => '1'
            ])->render();
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
            $customer         = Customer::findOrFail($id);
            $customer->status = $request->status;
            $customer->save();
            $status =  $request->status == '0' ? '1' : '0';
            $customers = Customer::orderBy('id','desc')
                                 ->where('status',$status)
                                 ->paginate(10);

            return view('pages.admin.customers.pagination', [
                'customers'=>$customers,
                'status' =>$status
            ])->render();
        }

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

        $customer                = Customer::findOrFail($id);
        $customer->name          = $request->name;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->phone         = $request->phone;
        $customer->email         = $request->email;
        $customer->notes         = $request->notes;
        $customer->address       = $request->address;
        $customer->tax_code      = $request->tax_code;
        $customer->facebook      = $request->facebook;
        $customer->customer_type = $request->customer_type;
        $customer->save();

        if ($request->ajax()) {
            $customers = Customer::orderBy('id','desc')
                                 ->where('status','1')
                                 ->paginate(10);

            return view('pages.admin.customers.pagination', [
                'customers'=>$customers,
                'status' => '1'
            ])->render();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        $customers = Customer::orderBy('id','desc')
                             ->where('status','0')
                             ->paginate(10);
        if ($request->ajax()) {
            return view('pages.admin.customers.pagination', [
                'customers' => $customers,
                'status' => '0'
            ])->render();
        }
    }
}
