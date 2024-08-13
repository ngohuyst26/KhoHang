@extends('layouts.master')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Categories-->
            <div class="card card-flush py-4 mt-10">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                   class="form-control form-control-solid w-250px ps-12" placeholder="Tìm kiếm danh mục">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid"
                                    id="category-status-filter"
                                    data-control="select2" data-hide-search="true" data-placeholder="Trạng thái">
                                <option value="all">Tất cả</option>
                                <option value="active">Hoạt động</option>
                                <option value="inactive">Không hoạt động</option>
                            </select>
                            <!--end::Select2-->
                        </div>

                        <!--begin::Add category-->
                        <a href="{{ route('category.add') }}" class="btn btn-primary">
                            Thêm danh mục
                        </a>
                        <!--end::Add category-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <div id="kt_ecommerce_categories_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable"
                                   id="kt_ecommerce_categories_table">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                    <th class="w-5 pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                   data-kt-check-target="#kt_ecommerce_categories_table .form-check-input">
                                        </div>
                                    </th>
                                    <th class="min-w-150">
                                        <span class="dt-column-title">Tên danh mục</span>
                                    </th>
                                    <th class="min-w-150">
                                        <span class="dt-column-title">Mô tả</span>
                                    </th>
                                    <th class="text-end min-w-100">
                                        <span class="dt-column-title">Trạng thái</span>
                                    </th>
                                    <th class="text-end min-w-120">
                                        <span class="dt-column-title">Hành động</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                <!-- Lặp qua danh sách danh mục -->
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}">
                                            </div>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td class="text-end">
                                            <!--begin::Badges-->
                                            <div class="badge {{ $category->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                                {{ $category->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}
                                            </div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('category.edit', $category->id) }}"
                                               class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary">
                                                <span class="svg-icon svg-icon-2">
                                                    @include('icons.edit')
                                                </span>
                                            </a>
                                            <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary">
                                                   <span class="svg-icon svg-icon-2">
                                                      @include('icons.trash')
                                                </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                            <div>
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Categories-->
        </div>
        <!--end::Content container-->
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const statusFilter = document.getElementById('category-status-filter');

                statusFilter.addEventListener('change', function () {
                    const status = this.value;
                    const url = new URL(window.location.href);
                    url.searchParams.set('status', status);
                    window.location.href = url.toString();
                });
            });
        </script>
    @endpush
@endsection
