@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="py-5">Chỉnh Sửa Danh Mục</h1>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên Danh Mục</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Trạng Thái</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                    <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Không hoạt động</option>
                                </select>
                                <div class="text-danger">
                                    {{ $errors->first('status') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô Tả</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $category->description }}</textarea>
                        <div class="text-danger">
                            {{ $errors->first('description') }}
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
