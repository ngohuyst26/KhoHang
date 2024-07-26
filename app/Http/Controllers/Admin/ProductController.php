<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::with(['productSku.optionValue.option'])->get();

        return view('pages.admin.products.list', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $products = Product::with(['productSku.optionValue.option'])->get();
        //        dd($products);
        $option = Option::all();

        return view('pages.admin.products.create', [
            'options'  => $option,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        dd($request);
        $data = $request->all();

        $productId = DB::table('products')->insertGetId([
            'name'        => $request->name,
            'description' => $request->description
        ]);

        // Xử lý dữ liệu từ form và lưu vào product_sku và option_value
        if (!isset($data['generated'])){
            DB::table('product_sku')->insertGetId([
                'product_id' => $productId,
                'price'      => $request->price,
                'sale_price' => $request->sale_price + 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }else{
            foreach ($data['generated'] as $index => $combination){
                $price = $combination['price'];

                // Lưu vào bảng product_sku và lấy ID
                $skuId = DB::table('product_sku')->insertGetId([
                    'product_id' => $productId,
                    'price'      => $price,
                    'sale_price' => $price + 2000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Lưu vào bảng option_value và lấy option_value_id
                $optionValues = [];
                foreach ($combination as $key => $value){
                    if ($key !== 'price' && $key !== 'stock'){
                        $optionId = $key; // option_id từ tên input
                        // Lưu vào bảng option_value nếu chưa tồn tại
                        $optionValueId = DB::table('option_value')
                                           ->updateOrInsert(
                                               ['product_id' => $productId, 'option_id' => $optionId, 'name' => $value],
                                               ['created_at' => now(), 'updated_at' => now()]
                                           );

                        // Lấy option_value_id
                        $optionValueId = DB::table('option_value')
                                           ->where('product_id', $productId)
                                           ->where('option_id', $optionId)
                                           ->where('name', $value)
                                           ->value('id');

                        if ($optionValueId){
                            $optionValues[] = [
                                'option_id'       => $optionId,
                                'option_value_id' => $optionValueId,
                            ];
                        }
                    }
                }
                // Tạo các kết hợp SKU và lưu vào bảng sku_value
                foreach ($optionValues as $optionValue){
                    DB::table('sku_value')->insert([
                        'product_id'      => $productId,
                        'sku_id'          => $skuId,
                        'option_id'       => $optionValue['option_id'],
                        'option_value_id' => $optionValue['option_value_id'],
                        'created_at'      => now(),
                        'updated_at'      => now(),
                    ]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

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

    public function upload(Request $request){
        dd($request);
        if ($request->hasFile('file')){
            $file           = $request->file('file');
            $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();

            $path        = $file->storeAs('uploads/' . date('Y/m'), $uniqueFileName,
                'public');
            $filePaths   = $request->session()->get('temporary_files', []);
            $filePaths[] = $path;
            $request->session()->put('temporary_files', $filePaths);

            return response()->json($request->session()->get('temporary_files', []));
        }else{
            // Trả về phản hồi JSON lỗi nếu không có tệp được tải lên
            return response()->json(['error' => 'Không có tệp được tải lên.']);
        }
    }
}
