<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface{

    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Category $model){
      parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {
        $categories = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $categories = $categories->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status') && $request->status != '' ){
            $categories = $categories->where('status',$request->status);
        }

        if($request->has('limit')){
            $categories = $categories->paginate($request->limit);
        }else{
            $categories = $categories->paginate(10);
        }

        return $categories;
    }

    public function latest($perPage = 0): Model
    {
        return $this->model->orderBy('id', 'DESC')
                           ->when($perPage !== 0, function ($query) use ($perPage) {
                               return $query->paginate($perPage);
                           })
                           ->get();
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
        $category = $this->model->find($id);
        if (!$category) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $category->delete();
    }
}