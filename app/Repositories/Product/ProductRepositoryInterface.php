<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepositoryInterface;

interface ProductRepositoryInterface extends BaseRepositoryInterface{

    public function getAll($request);

    public function getTrash(int $page);

    public function createProduct($data);

    public function addProduct($request);

    public function addProductApi($request);

    public function createSku($productId, $price, $sale_price, $inventory, $barcode = NULL, $code);

    public function createPhoto($request, $skuId);

    public function createOptionValue($productId, $optionId, $value);

    public function createSkuValue($productId, $skuId, $optionValue);

    public function getOneSku($product_id, $sku_id);

    public function updateProductSku($request, $id, $skuId);

    public function deleteProduct($id);

    public function restoreProduct($id);

}