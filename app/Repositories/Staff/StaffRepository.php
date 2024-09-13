<?php

namespace App\Repositories\Staff;

use App\Models\Staff;
use App\Repositories\BaseRepository;
use App\Repositories\Staff\StaffRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StaffRepository extends BaseRepository implements StaffRepositoryInterface{
    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Staff $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        $this->validate($data, $this->rules, $this->messages);
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool|Model
    {
        $this->validate($data, $this->rules, $this->messages);
        return $this->model->findOrFail($id)->update($data);
    }

    public function find(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id): bool|Model
    {
        $staffs = $this->model->find($id);
        if (!$staffs) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $staffs->delete();
    }
}