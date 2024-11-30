<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(User::all()->toArray());
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
        $data = $request->all();
        $data['domain_name'] = $request->domain_name.'.'.config('app.domain');
        $validate =  Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:tenants,email',
            'domain_name' => 'required|string|max:255|unique:domains,domain',
            'password' =>  ['required', 'confirmed', Password::defaults()],
        ],
        [
            'required' => "Vui lòng nhập dữ liệu",
            'string'   =>"Dữ liệu phải là ký tự",
            'max'      =>"Độ dài ký tự tối đa :max",
            "unique"   => "Dữ liệu đã tồn tại trong hệ thống"
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status'  => false,
                'message' => "Lỗi",
                'data'    => $validate->errors()
            ], 400);
        }

        $tenant = Tenant::create(
            [
                'name'        => $request->name,
                'email'       => $request->email,
                'domain_name' => $request->domain_name,
                'password'    => $request->password,
                'plan'        => 'premium',
                'trial_ends_at'  => now()->addDays(7),
                'has_used_trial' => 0,

            ]
        );
        $tenant->domains()->create([
            'domain' => $request->domain_name.'.'.config('app.domain')
        ]);

        return response()->json([
            'status'  => true,
            'message' => "Đã đăng ký thành công với gói dùng thử premium 7 ngày",
            'data'    => $tenant
        ], 201);

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


}
