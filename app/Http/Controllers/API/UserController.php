<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $check_user_id = auth()->user()->id == $id;
        if(!$check_user_id){
            return response()->json([
               'status' => FALSE,
               'messagse' => "Không có quyền cập nhật thông tin người dùng này",
            ],Response::HTTP_FORBIDDEN);
        }

        User::find($id)->update($request->all());

        return response()->json([
            'status' => TRUE,
            'messagse' => "Đã cập nhật thông tin người dùng",
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
