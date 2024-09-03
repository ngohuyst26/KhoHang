<?php

namespace App\Repositories\CheckStock;

use App\Repositories\BaseRepositoryInterface;

interface CheckStockRepositoryInterface extends BaseRepositoryInterface{
    public function getOneCheckStock($id);

    public function updateCheckStock($request, $id);
}

