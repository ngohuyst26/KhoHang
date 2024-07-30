<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ProductRepositoryInterface
{


    public function latest($perPage = 0)
    {

    }

    public function create(array $data): Model
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, array $data): bool|Model
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool|Model
    {
        // TODO: Implement delete() method.
    }

    public function find(int $id): ?Model
    {
        // TODO: Implement find() method.
    }
}
