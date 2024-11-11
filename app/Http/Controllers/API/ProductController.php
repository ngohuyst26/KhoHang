<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddVariantsRequest;
use App\Http\Requests\StoreProductsRequest;
use App\Models\ProductSku;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller{

    protected $productRepository;
    protected $checkStockRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CheckStockRepositoryInterface $stockRepository
    ){
        $this->productRepository    = $productRepository;
        $this->checkStockRepository = $stockRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        return $this->productRepository->getAll($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request){


        $skuIds = $this->productRepository->addProductApi($request);

        return response()->json([
            'message' => 'Product created successfully',
            'sku_ids' => $skuIds,
        ], 201);
    }


    public function addVariant(AddVariantsRequest $request){
        $productId    = $request->product_id;
        $productCheck = $this->productRepository->getOneProduct($productId);
        if ($productCheck == NULL){
            return response()->json(['error' => 'Không tìm thấy sản phẩm!'], 400);
        }
        $optionValues = [];
        foreach ($request->data as $option){
            $optionValues[] = $option['value'];
        }

        $productSkuQuery = ProductSku::query();
        $productSkuQuery->where('product_id',
            $request->product_id);
        $productSkuQuery->whereHas('optionValue', function ($query) use ($optionValues){
            $query->whereIn('name', $optionValues);
        }, '=', count($optionValues));

        $productSku = $productSkuQuery->get();

        if (!$productSku->isEmpty()){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Biến thể ' . implode(", ",
                        $optionValues) . ' đã tồn tại vui lòng tạo biến thể khác'
            ], 400);
        }

        DB::beginTransaction();
        try{
            if (empty($request->code)){
                $request->merge(['code' => ProductSku::generateNextCode()]);
            }else{
                $existingSku = ProductSku::where('code', $request->code)->first();
                if ($existingSku){
                    $request->merge(['code' => ProductSku::generateNextCode()]);
                }
            }
            $sku = $this->productRepository->createSku(
                $productId,
                $request->price,
                $request->sale_price,
                $request->inventory,
                $request->barcode,
                $request->code
            );

            $optionValues = [];
            foreach ($request->data as $option){
                $optionValue = $this->productRepository->createOptionValue(
                    $productId,
                    $option['type'],
                    $option['value']
                );
                if ($optionValue){
                    $optionValues[] = [
                        'option_id'       => $option['type'],
                        'option_value_id' => $optionValue->id,
                    ];
                }
            }

            foreach ($optionValues as $optionValue){
                $this->productRepository->createSkuValue(
                    $productId,
                    $sku->id,
                    $optionValue
                );
            };

            DB::commit();

            return response()->json([
                'status'  => TRUE,
                'message' => 'Tạo thành công'
            ], 200);
        }catch (\Exception $e){
            DB::rollBack();

            return response()->json(['error' => 'Có lỗi xảy ra. Vui lòng thử lại'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $skuId){
        $product = $this->productRepository->getOneSku($id, $skuId);
        if ($product->productSku->isEmpty()){
            return response()->json([
                "data" => [
                    'code'    => 404,
                    'message' => 'Sản phẩm không tồn tại'
                ]
            ], 404);
        }

        return response()->json([
            "data" => $product
        ]);
    }

    public function getOneProduct($id){
        return $this->productRepository->getOneProduct($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, $skuId){
        return $this->productRepository->updateProductSku($request, $id, $skuId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        return $this->productRepository->deleteProduct($id);
    }

    public function restore(string $id){
        return $this->productRepository->restoreProduct($id);
    }

    public function upload(Request $request){
        if ($request->hasFile('file')){
            $skuId = $request->sku_id;

            if (is_numeric($skuId)){
                $files = $request->file('file');
                $paths = [];
                foreach ($files as $file){
                    $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
                    $path           = $file->storeAs(
                        'uploads/' . date('Y/m'),
                        $uniqueFileName,
                        'public'
                    );
                    $paths[]        = $path;
                    $this->productRepository->createPhoto($skuId, $path);
                }

                return response()->json([
                    'success' => 'Tệp đã được tải lên thành công.',
                    'paths'   => $paths,
                ]);
            }
        }else{
            return response()->json(['error' => 'Không có tệp được tải lên.']);
        }
    }

}