@extends('layouts.master')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Suppliers-->
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
                            <input type="text" data-kt-ecommerce-supplier-filter="search"
                                   class="form-control form-control-solid w-250px ps-12" placeholder="Tìm kiếm nhà cung cấp">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid"
                                    id="supplier-status-filter"
                                    data-control="select2" data-hide-search="true" data-placeholder="Trạng thái">
                                <option value="all">Tất cả</option>
                                <option value="active">Hoạt động</option>
                                <option value="inactive">Không hoạt động</option>
                            </select>
                            <!--end::Select2-->
                        </div>

                        <!--begin::Add supplier-->
                        <a href="{{ route('supplier.add') }}" class="btn btn-primary">
                            Thêm nhà cung cấp
                        </a>
                        <!--end::Add supplier-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <div id="kt_ecommerce_suppliers_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable"
                                   id="kt_ecommerce_suppliers_table">
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                    <th class="w-5 pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                   data-kt-check-target="#kt_ecommerce_suppliers_table .form-check-input">
                                        </div>
                                    </th>
                                    <th class="min-w-150">
                                        <span class="dt-column-title">Nhà cung cấp</span>
                                    </th>
                                    <th class="text-end min-w-120">
                                        <span class="dt-column-title">Điện thoại</span>
                                    </th>
                                    <th class="text-end min-w-200">
                                        <span class="dt-column-title">Địa chỉ</span>
                                    </th>
                                    <th class="text-end min-w-150">
                                        <span class="dt-column-title">Email</span>
                                    </th>
                                    <th class="text-end min-w-150">
                                        <span class="dt-column-title">Mã số thuế</span>
                                    </th>
                                    <th class="text-end min-w-200">
                                        <span class="dt-column-title">Ghi chú</span>
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
                                <!-- Lặp qua danh sách nhà cung cấp -->
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="{{ $supplier->id }}">
                                            </div>
                                        </td>
                                        <td>{{ $supplier->name }}</td>
                                        <td class="text-end">{{ $supplier->phone }}</td>
                                        <td class="text-end">{{ $supplier->address }}</td>
                                        <td class="text-end">{{ $supplier->email }}</td>
                                        <td class="text-end">{{ $supplier->tax_code }}</td>
                                        <td class="text-end">{{ $supplier->notes }}</td>
                                        <td class="text-end">
                                            <!--begin::Badges-->
                                            <div class="badge {{ $supplier->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                                {{ $supplier->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}
                                            </div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('supplier.edit', $supplier->id) }}"
                                               class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary">
                                                Sửa
                                            </a>
                                            <form action="{{ route('supplier.delete', $supplier->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary">
                                                    Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                            <div>
                                {{$suppliers->links()}}
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Suppliers-->
        </div>
        <!--end::Content container-->
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const statusFilter = document.getElementById('supplier-status-filter');

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
