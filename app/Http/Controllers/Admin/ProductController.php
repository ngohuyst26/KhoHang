<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Category;
use App\Models\Option;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductSku;
use App\Models\Supplier;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{


    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->getAll(10);
        return view('pages.admin.products.list', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = Option::all();
        $categories = Category::all();
        $supplier = Supplier::all();
        return view('pages.admin.products.create', [
            'options' => $option,
            'categories' => $categories,
            'supplier' => $supplier
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $skuId = $this->productRepository->addProduct($request);
//        return redirect(route('products.index'));

        return response()->json(['skuId' => $skuId], 200);
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
        $product = Product::with(['productSku' => function ($query) use ($skuId) {
            $query->where('id', $skuId)->with('optionValue.option', 'photo');
        }])->find($id);
        $option = Option::all();
        $categories = Category::all();
        $supplier = Supplier::all();
        $images = [];
        foreach ($product->productSku->first()->photo as $photo) {
            $path = str_replace('/', "\\", public_path('storage/' . $photo->url));
            if (file_exists($path)) {
                $image = [
                    'id' => $photo->id,
                    'name' => basename($photo->url),
                    'size' => filesize($path),
                    'url' => Storage::url($photo->url)
                ];
                $images[] = $image;
            }
        }

        return view('pages.admin.products.edit', [
            'options' => $option,
            'product' => $product,
            'categories' => $categories,
            'supplier' => $supplier,
            'images' => $images

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, string $id, int $skuId)
    {
//        dd($request);
        Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id
        ]);

        ProductSku::where('id', $skuId)->update([
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'inventory' => $request->inventory,
        ]);

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
            $skuId = $request->sku_id;
            if (is_numeric($skuId)) {
                $file = $request->file('file');
                $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('uploads/' . date('Y/m'), $uniqueFileName,
                    'public');
                $this->productRepository->createPhoto($skuId, $path);
            }
        } else {
            // Trả về phản hồi JSON lỗi nếu không có tệp được tải lên
            return response()->json(['error' => 'Không có tệp được tải lên.']);
        }
    }

    public function uploadEdit(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs('uploads/' . date('Y/m'), $uniqueFileName,
                'public');
            $filePaths = $request->session()->get('temporary_files', []);
            $filePaths[] = $path;
            $request->session()->put('temporary_files', $filePaths);
            $fileInfo = [
                'name' => $uniqueFileName,
                'size' => $file->getSize(),
                'url' => $path
            ];
            $arrFiles = $request->session()->get('upload_files', []);
            $arrFiles[] = $fileInfo;
            $request->session()->put('upload_files', $arrFiles);

            return response()->json([
                'new_file' => $request->session()->get('upload_files')
            ]);
        } else {
            // Trả về phản hồi JSON lỗi nếu không có tệp được tải lên
            return response()->json(['error' => 'Không có tệp được tải lên.']);
        }
    }

    public function clearTemporaryFiles(Request $request)
    {
        $filePaths = $request->session()->get('temporary_files', []);
        foreach ($filePaths as $filePath) {
            Storage::disk('public')->delete($filePath);
        }
        $request->session()->forget(['temporary_files', 'upload_files']);

        return response()->json(['message' => 'Temporary files cleared and session data removed.']);
    }

    public function deletePhoto(Request $request)
    {
        $imageName = $request->name;

        // Tìm và xóa tệp tin từ cơ sở dữ liệu
        // Xóa tệp từ hệ thống tệp
        $filePath = public_path('storage/uploads/' . date('Y/m') . '/' . $imageName);
        $filePath = str_replace('/', "\\", $filePath);
        if (file_exists($filePath)) {
            Photo::where('id', $request->id)->delete();
            unlink($filePath);
            return response()->json(['success' => true]);
        }

        return response()->json(['error'], 400);


    }
}
