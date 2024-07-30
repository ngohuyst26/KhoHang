<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::with(['productSku.photo', 'productSku.optionValue.option'])->paginate(5);

        return view('pages.admin.products.list', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //        dd($products);
        $products = Product::with(['productSku.optionValue.option'])->get();
        $option = Option::all();
        $categories = Category::all();

        return view('pages.admin.products.create', [
            'options' => $option,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'inventory' => 'nullable|numeric',
            'generated.*.price' => 'sometimes|required|numeric',
            'generated.*.sale_price' => 'sometimes|required|numeric',
            'generated.*.stock' => 'sometimes|required|numeric',
            'category_id' => 'exists:App\Models\Category,id'
        ],
            [
                'required' => 'Dữ liệu không được trống!',
                'max' => 'Dữ liệu phải nhỏ hơn 255 ký tự',
                'numeric' => 'Dữ liệu phải là số'
            ]);


        $validator->sometimes(['price', 'sale_price', 'inventory'], 'required', function ($input) {
            return !isset($input->generated);
        });

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Tạo mảng lỗi cho price và stock
            $price = $errors->get('generated.*.price');
            $salePrice = $errors->get('generated.*.sale_price');
            $stock = $errors->get('generated.*.stock');
            $otherErrors = [];
            foreach ($errors->toArray() as $key => $messages) {
                if (strpos($key, 'generated.') !== 0) {
                    $otherErrors[$key] = $messages;
                }
            }
            $stockErrors = [];
            foreach ($stock as $key => $messages) {
                $changeKey = str_replace('.', '_', $key);
                $stockErrors[$changeKey] = $messages;
            }
            $priceErrors = [];
            foreach ($price as $key => $messages) {
                $changeKey = str_replace('.', '_', $key);
                $priceErrors[$changeKey] = $messages;
            }
            $salePriceErrors = [];
            foreach ($salePrice as $key => $messages) {
                $changeKey = str_replace('.', '_', $key);
                $salePriceErrors[$changeKey] = $messages;
            }
            return response()->json([
                'errors' => [
                    'price' => $priceErrors,
                    'sale_price' => $salePriceErrors,
                    'stock' => $stockErrors,
                    'other' => $otherErrors,
                ]
            ], 400);
        }


        $data = $request->all();
        $productId = DB::table('products')->insertGetId([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);

        // Xử lý dữ liệu từ form và lưu vào product_sku và option_value
        if (!isset($data['generated'])) {
            $skuId = DB::table('product_sku')->insertGetId([
                'product_id' => $productId,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'inventory' => $request->inventory,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $temporary_files = $request->session()->get('temporary_files', []);
            if (!empty($temporary_files)) {
                foreach ($temporary_files as $filePath) {
                    DB::table('photos')->insert([
                        'product_sku_id' => $skuId,
                        'url' => $filePath
                    ]);
                }
                $request->session()->forget('temporary_files');
            }
        } else {
            foreach ($data['generated'] as $index => $combination) {
                $price = $combination['price'];
                $sale_price = $combination['sale_price'];
                $inventory = $combination['stock'];

                // Lưu vào bảng product_sku và lấy ID
                $skuId = DB::table('product_sku')->insertGetId([
                    'product_id' => $productId,
                    'price' => $price,
                    'sale_price' => $sale_price,
                    'inventory' => $inventory,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Lưu vào bảng option_value và lấy option_value_id
                $optionValues = [];
                foreach ($combination as $key => $value) {
                    if ($key !== 'price' && $key !== 'stock' && $key !== 'sale_price') {
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

                        if ($optionValueId) {
                            $optionValues[] = [
                                'option_id' => $optionId,
                                'option_value_id' => $optionValueId,
                            ];
                        }
                    }
                }
                // Tạo các kết hợp SKU và lưu vào bảng sku_value
                foreach ($optionValues as $optionValue) {
                    DB::table('sku_value')->insert([
                        'product_id' => $productId,
                        'sku_id' => $skuId,
                        'option_id' => $optionValue['option_id'],
                        'option_value_id' => $optionValue['option_value_id'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, int $skuId)
    {
        dd($skuId);
        $products = Product::with(['productSku.optionValue.option'])->get();
        $option = Option::all();
        $categories = Category::all();
        return view('pages.admin.products.edit', [
            'options' => $option,
            'products' => $products,
            'categories' => $categories
        ]);
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

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs('uploads/' . date('Y/m'), $uniqueFileName,
                'public');
            $filePaths = $request->session()->get('temporary_files', []);
            $filePaths[] = $path;
            $request->session()->put('temporary_files', $filePaths);

            return response()->json($request->session()->get('temporary_files', []));
        } else {
            // Trả về phản hồi JSON lỗi nếu không có tệp được tải lên
            return response()->json(['error' => 'Không có tệp được tải lên.']);
        }
    }
}
