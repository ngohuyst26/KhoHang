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
                            </i>Export
                        </button>
                        <div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="{{route('exportOrder')}}" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
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
                                    <col data-dt-column="1" style="width: 150px;">
                                    <col data-dt-column="2" style="width: 200px;">
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
                                    <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0">
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
                                    <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="No. Orders: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Trạng thái</span><span class="dt-column-order"></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($orders as $item)
                                    <tr class="main-row">
                                        <td>
                                            <a href="#" class="text-gray-900 text-hover-primary">HD000{{$item->id ?? ''}}</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="badge">{{$item->created_at ?? ''}}</div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-gray-900 text-hover-primary">{{$item->customers->name ?? 'Khách lẻ'}}</a>
                                        </td>
                                        <td class="text-end">
                                            <div class="badge badge-light-success">{{ number_format($item->grand_total, 0, ',', '.')}} đ</div>
                                        </td>
                                        <td class="text-end">{{$item->discount ?? '0'}} %</td>
                                        <td class="text-end">
                                            <div class="badge badge-light">{{number_format($item->total_payment, 0, ',', '.')}} đ</div>
                                        </td>
                                        @if($item->order_status == '1')
                                            <td class="text-end">
                                                <div class="badge badge-light-success">Hoàn thành</div>
                                            </td>
                                        @elseif($item->order_status == '0')
                                            <td class="text-end">
                                                <div class="badge badge-light-danger">Đã hủy</div>
                                            </td>
                                        @endif
                                    </tr>
                                    <tr class="details-row h-100px w-100px d-none">
                                        <td colspan="7">
                                            <div class="card border-gray-300 bg-gray-100">
                                                <div class="card-body py-20">
                                                    <div class="pb-4">
                                                        <div class="d-flex flex-column gap-7 gap-md-10">
                                                            <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Mã đơn:</span>
                                                                    <span class="fs-5">#HD000{{$item->id ?? ''}} </span>
                                                                </div>
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Ngày tạo</span>
                                                                    <span class="fs-5">{{$item->created_at ?? ''}}</span>
                                                                </div>
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Người tạo</span>
                                                                    <span class="fs-6">{{$item->user->name ?? ''}}</span>
                                                                </div>
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Trạng thái</span>
                                                                    @if($item->order_status == '0')
                                                                        <span>
                                                                            <div class="badge badge-light-danger">Đã hủy</div>
                                                                        </span>
                                                                    @elseif($item->order_status == '1')
                                                                        <span>
                                                                            <div class="badge badge-light-success">Hoàn thành</div>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Khách hàng</span>
                                                                    <span class="fs-6">{{$item->customers->name ?? ''}}
                                                                        <br>{{$item->customers->city_name ?? ''}}
                                                                    </span>
                                                                </div>
                                                                <div class="flex-root d-flex flex-column">
                                                                    <span class="text-muted">Người bán</span>
                                                                    <span class="fs-6">{{$item->user->name ?? ''}}</span>
                                                                </div>
                                                                <div class="flex-root d-flex flex-column">

                                                                </div>
                                                                <div class="flex-root d-flex flex-column">

                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between flex-column">
                                                                <div class="table-responsive border-bottom mb-9">
                                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                                        <thead>
                                                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                                                            <th class="min-w-50px pb-2">Mã hàng</th>
                                                                            <th class="min-w-175px pb-2">Tên hàng</th>
                                                                            <th class="min-w-70px text-center pb-2">Số lượng</th>
                                                                            <th class="min-w-80px text-end pb-2">Đơn giá</th>
                                                                            <th class="min-w-100px text-end pb-2">Giảm giá</th>
                                                                            <th class="min-w-100px text-end pb-2">Thành tiền</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody class="fw-semibold text-gray-600">
                                                                        @foreach($item->orderItems as $orderItem)
                                                                            <tr>
                                                                                <td class="text-start">MH000{{$orderItem->id ?? ''}}</td>
                                                                                <td>
                                                                                    <div class="d-flex align-items-center">
                                                                                        {{--                                                                                        <a href="#" class="symbol symbol-50px">--}}
                                                                                        {{--                                                                                            <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.png);"></span>--}}
                                                                                        {{--                                                                                        </a>--}}
                                                                                        <div class="ms-5">
                                                                                            <div class="fw-bold">{{$orderItem->product->name ?? ''}}</div>
                                                                                            {{--                                                                                            <div class="fs-7 text-muted">Delivery Date: 23/06/2024</div>--}}
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">{{$orderItem->quantity ?? ''}}</td>
                                                                                <td class="text-end">{{number_format($orderItem->unit_amount , 0, ',', '.')}} đ</td>
                                                                                <td class="text-end">0 %</td>
                                                                                <td class="text-end">{{number_format($orderItem->unit_amount , 0, ',', '.')}} đ</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        <tr>
                                                                            <td colspan="5" class="text-end">Subtotal</td>
                                                                            <td class="text-end">{{number_format($item->grand_total , 0, ',', '.')}} đ</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5" class="text-end">VAT (0%)</td>
                                                                            <td class="text-end">0</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td colspan="5" class="fs-3 text-gray-900 fw-bold text-end">Grand Total</td>
                                                                            <td class="text-gray-900 fs-3 fw-bolder text-end">{{number_format($item->grand_total , 0, ',', '.')}} đ</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-stack flex-wrap mt-lg-5 pt-3 ">
                                                        <div class="my-1 me-5 ">
                                                            <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">In hóa đơn</button>
                                                            <button type="button" class="btn btn-light-success my-1">Xuất file</button>
                                                        </div>
                                                        <a href="#" class="btn btn-danger my-1">Hủy đơn </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach</tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                        <div id="" class="row">
                            <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div>
                            <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                {{$orders->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-row').click(function () {
                var nextRow = $(this).next('.details-row');
                nextRow.toggleClass('d-none');
            });
        });
    </script>
@endpush



