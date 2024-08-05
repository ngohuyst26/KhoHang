@extends('layouts.master')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report">
                        </div>
                        <div id="kt_ecommerce_report_customer_orders_export" class="d-none">
                            <div class="dt-buttons btn-group flex-wrap">
                                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                                    <span>Copy</span></button>
                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                                    <span>Excel</span></button>
                                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                                    <span>CSV</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                                    <span>PDF</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-150px">
                            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status" data-select2-id="select2-data-9-88bp" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                <option data-select2-id="select2-data-11-5w08"></option>
                                <option value="all">All</option>
                                <option value="active">Active</option>
                                <option value="locked">Locked</option>
                                <option value="disabled">Disabled</option>
                                <option value="banned">Banned</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-66il" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-o04k-container" aria-controls="select2-o04k-container"><span class="select2-selection__rendered" id="select2-o04k-container" role="textbox" aria-readonly="true" title="Status"><span class="select2-selection__placeholder">Status</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Export Report
                        </button>
                        <div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                            </div>
                        </div>
                        <a type="button" href="{{route('sale.sale.index')}}" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-plus">
                                <span class="path1"></span>
                            </i>Thêm mới
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="kt_ecommerce_report_customer_orders_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div id="" class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_report_customer_orders_table" style="width: 1199.5px;">
                                <colgroup>
                                    <col data-dt-column="0" style="width: 161px;">
                                    <col data-dt-column="1" style="width: 228.516px;">
                                    <col data-dt-column="2" style="width: 145.484px;">
                                    <col data-dt-column="3" style="width: 244.641px;">
                                    <col data-dt-column="4" style="width: 123.547px;">
                                    <col data-dt-column="5" style="width: 150.781px;">
                                    <col data-dt-column="6" style="width: 145.531px;">
                                </colgroup>
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                    <th class="min-w-10px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Mã đơn</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="min-w-50px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Customer Name: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Thời gian</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-end" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Khách hàng</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-end" data-dt-column="2" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Tổng tiền hàng</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-end" data-dt-column="3" rowspan="1" colspan="1" aria-label="Date Joined: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Giảm giá</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="No. Orders: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Khách đã trả</span><span class="dt-column-order"></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($orders as $item)
                                    <tr>
                                        <td>
                                            <a href="#" class="text-gray-900 text-hover-primary">HD000{{$item->id ?? ''}}</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="badge">{{$item->created_at ?? ''}}</div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="text-gray-900 text-hover-primary">{{$item->customer_id ?? 'Khách lẻ'}}</a>
                                        </td>
                                        <td class="text-end">
                                            <div class="badge badge-light-success">{{ number_format($item->grand_total, 0, ',', '.')}} đ</div>
                                        </td>
                                        <td class="text-end">{{$item->discount ?? '0'}} %</td>
                                        <td class="text-end">
                                            <div class="badge badge-light">{{number_format($item->total_payment, 0, ',', '.')}} đ</div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <div id="" class="row">
                            <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                {{--                                <div>--}}
                                {{--                                    <select name="kt_ecommerce_report_customer_orders_table_length" aria-controls="kt_ecommerce_report_customer_orders_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">--}}
                                {{--                                        <option value="10">10</option>--}}
                                {{--                                        <option value="25">25</option>--}}
                                {{--                                        <option value="50">50</option>--}}
                                {{--                                        <option value="100">100</option>--}}
                                {{--                                    </select>--}}
                                {{--                                    <label for="dt-length-0"></label>--}}
                                {{--                                </div>--}}
                            </div>
                            <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                {{$orders->links()}}
                                {{--                                <div class="dt-paging paging_simple_numbers">--}}
                                {{--                                    <ul class="pagination">--}}
                                {{--                                        <li class="dt-paging-button page-item disabled">--}}
                                {{--                                            <a class="page-link previous" aria-controls="kt_ecommerce_report_customer_orders_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item active">--}}
                                {{--                                            <a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item">--}}
                                {{--                                            <a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="1" tabindex="0">2</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item">--}}
                                {{--                                            <a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="2" tabindex="0">3</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item">--}}
                                {{--                                            <a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="3" tabindex="0">4</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item">--}}
                                {{--                                            <a href="#" class="page-link" aria-controls="kt_ecommerce_report_customer_orders_table" data-dt-idx="4" tabindex="0">5</a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="dt-paging-button page-item">--}}
                                {{--                                            <a href="#" class="page-link next" aria-controls="kt_ecommerce_report_customer_orders_table" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="next"></i></a>--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css">
    <style>

    </style>
@endpush


