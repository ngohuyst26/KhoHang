<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepositoryInterface;

interface ProductRepositoryInterface extends BaseRepositoryInterface{

    public function getAll(int $page);

    public function getTrash(int $page);

    public function createProduct($data);

    public function addProduct($request);

    public function createSku($productId, $price, $sale_price, $inventory, $barcode);

    public function createPhoto($request, $skuId);

    public function createOptionValue($productId, $optionId, $value);

    public function createSkuValue($productId, $skuId, $optionValue);


}
