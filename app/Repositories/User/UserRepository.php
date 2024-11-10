<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;

class UserRepository extends BaseRepository implements UserRepositoryInterface{

    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {
        $users = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $users = $users->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status')  && $request->status != '' ){
            $users = $users->where('status',$request->status);
        }

        if($request->has('limit')){
            $users = $users->paginate($request->limit);
        }else{
            $users = $users->paginate(10);
        }

        return $users;
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
        $rules = [
            'name' => 'required|max:255',
            'email' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
        ];

        $messages = [
            'required' => 'Dữ liệu không được trống!',
            'max' => 'Dữ liệu tối đa :max kí tự',
            'email.unique' => "Email đã tồn tại trong hệ thống"
        ];

        $this->validate($data, $rules, $messages);
        return $this->model->findOrFail($id)->update($data);
    }

    public function find(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id): bool|Model
    {
        $users = $this->model->find($id);
        if (!$users) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $users->delete();
    }

}