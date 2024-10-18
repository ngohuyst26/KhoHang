<?php

namespace App\Repositories\ImportGoods;

use App\Repositories\BaseRepositoryInterface;

interface ImportGoodsRepositoryInterface extends BaseRepositoryInterface{

    public function getAll($request);

    public function getOne($id);

    public function createImportGoods($request);

    public function updateImportGoods($request, $id);

    public function cancelImportGoods($id);

}

