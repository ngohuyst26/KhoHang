@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="py-5">Sửa Nhà Cung Cấp</h1>
            </div>
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $supplier->name) }}">
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Điện Thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $supplier->phone) }}">
                                <div class="text-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $supplier->address) }}">
                                <div class="text-danger">
                                    {{ $errors->first('address') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $supplier->email) }}">
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tax_code" class="form-label">Mã Số Thuế</label>
                                <input type="text" class="form-control" id="tax_code" name="tax_code" value="{{ old('tax_code', $supplier->tax_code) }}">
                                <div class="text-danger">
                                    {{ $errors->first('tax_code') }}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Trạng Thái</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="1" {{ old('status', $supplier->status) == '1' ? 'selected' : '' }}>Hoạt Động</option>
                                    <option value="0" {{ old('status', $supplier->status) == '0' ? 'selected' : '' }}>Không Hoạt Động</option>
                                </select>
                                <div class="text-danger">
                                    {{ $errors->first('status') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Ghi Chú</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes', $supplier->notes) }}</textarea>
                        <div class="text-danger">
                            {{ $errors->first('notes') }}
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
