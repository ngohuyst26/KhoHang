<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandInformationRequest;
use App\Models\BrandInformation;
use Illuminate\Http\Request;

class BrandInformationController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return 'hihi';
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
    public function store(BrandInformationRequest $request){
        //        $request->validate([
        //            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // File logo
        //            'name_brand' => 'required|string|max:255',
        //            'phone' => 'required|string|max:15',
        //            'email' => 'required|email',
        //            'facebook_link' => 'nullable|url',
        //            'youtube_link' => 'nullable|url',
        //            'tiktok_link' => 'nullable|url',
        //        ]);
        $logoPath = NULL;
        if ($request->hasFile('logo')){
            $file     = $request->file('logo');
            $logoPath = $file->store('logos', 'public');
        }
        $brandInformation = BrandInformation::first();
        $brandInformation->update([
            'logo'          => $logoPath,
            'name_brand'    => $request->input('name_brand'),
            'phone'         => $request->input('phone'),
            'email'         => $request->input('email'),
            'facebook_link' => $request->input('facebook_link'),
            'youtube_link'  => $request->input('youtube_link'),
            'tiktok_link'   => $request->input('tiktok_link'),
        ]);

        return response()->json([
            'message' => 'Cập nhật thông tin thương hiệu thành công!',
            'data'    => $brandInformation,
        ], 201);
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
