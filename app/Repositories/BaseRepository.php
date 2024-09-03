<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    protected function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Lấy tất cả bản ghi
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Lấy danh sách các bản ghi mới nhất
     *
     * @param $perPage
     *
     * @return mixed
     */
    public function latest($perPage = 0): Model
    {
        return $this->model->orderBy('id', 'DESC')
            ->when($perPage !== 0, function ($query) use ($perPage) {
                return $query->paginate($perPage);
            })
            ->get();
    }

    /**
     * Thêm mới bản ghi mới
     *
     * @param array $data
     *
     * @return Model
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update bản ghi theo id
     *
     * @param int $id
     * @param array $data
     *
     * @return bool|Model
     */
    public function update(int $id, array $data): bool|Model
    {
        return $this->model->where('id',$id)->update($data);
    }

    /**
     * Lấy bản ghi theo id
     *
     * @param int $id
     *
     * @return null|Model
     */
    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * Xóa bản ghi đã tồn tại
     *
     * @param int $id
     *
     * @return bool|Model
     */
    public function delete(int $id): bool|Model
    {
        $modelInstance = $this->model->find($id);

        if (!$modelInstance) {
            return throw new ModelNotFoundException('Record not found!');
        }

        $modelInstance->delete();

        return $modelInstance;
    }

    protected function validate(array $data, array $rules, array $message)
    {
        $validator = Validator::make($data, $rules, $message);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
