<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{

    public function latest($perPage = 0);

    public function create(array $data): Model;

    public function update(int $id, array $data): bool|Model;

    public function delete(int $id): bool|Model;

    public function find(int $id): ?Model;
}
