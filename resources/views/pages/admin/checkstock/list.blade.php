@extends('layouts.master')
@section('content')
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Tìm kiếm theo mã phiếu">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-9-hsfc" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                <option data-select2-id="select2-data-11-g9su"></option>
                                <option value="all">All</option>
                                <option value="published">Published</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="inactive">Inactive</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-9ld4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-nbzr-container" aria-controls="select2-nbzr-container"><span class="select2-selection__rendered" id="select2-nbzr-container" role="textbox" aria-readonly="true" title="Status"><span class="select2-selection__placeholder">Status</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select2-->
                        </div>

                        <!--begin::Add product-->
                        <a href="{{route('check-stocks.create')}}" class="btn btn-primary">
                            Kiểm kho
                        </a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div id="" class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-7 dataTable " id="" style="width: 1134.1px;">
                                <colgroup>
                                    <col data-dt-column="0" style="width: 36.4px;">
                                    <col data-dt-column="1" style="width: 100.212px;">
                                    <col data-dt-column="2" style="width: 130.1px;">
                                    <col data-dt-column="3" style="width: 130.975px;">
                                    <col data-dt-column="4" style="width: 80.1px;">
                                    <col data-dt-column="5" style="width: 135.1px;">
                                    <col data-dt-column="6" style="width: 155.1px;">
                                    <col data-dt-column="7" style="width: 120.113px;">
                                    <col data-dt-column="8" style="width: 150.113px;">
                                    <col data-dt-column="9" style="width: 120.113px;">
                                    <col data-dt-column="10" style="width: 120.113px;">
                                </colgroup>
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                    <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1" aria-label="">
                                        <span class="dt-column-title">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
                                            </div>
                                        </span>
                                        <span class="dt-column-order"></span>
                                    </th>
                                    <th class="min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Product: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Mã kiểm kho</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-125px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Thời gian</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-125px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Ngày cân bằng</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-90px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">SL thực tế</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Tổng thực tế</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-80px dt-orderable-none" data-dt-column="6" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">Chênh lệch</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-100px dt-orderable-none" data-dt-column="7" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">SL lệch tăng</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-100px dt-orderable-none" data-dt-column="8" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">SL lệch giảm</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-150px dt-orderable-none" data-dt-column="9" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">Ghi chú</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-start min-w-100px dt-orderable-none" data-dt-column="10" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">Trạng thái</span><span class="dt-column-order"></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-black-600">
                                @foreach($stocks as $stock)
                                    <tr class="main-row">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td colspan="1" class="fw-bold">
                                            KK{{$stock->id}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric" data-order="1">
                                            {{\Carbon\Carbon::parse($stock->created_at)->format('d/m/Y g:i')}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{\Carbon\Carbon::parse($stock->updated_at)->format('d/m/Y g:i')}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{$stock->ac_number}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{number_format($stock->ac_total, 0, '', ',')}} VNĐ
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{$stock->qty_increased - (- $stock->qty_decreased)}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{$stock->qty_increased}}
                                        </td>
                                        <td class="text-start pe-0 dt-type-numeric">
                                            {{$stock->qty_decreased}}
                                        </td>
                                        <td class="text-start pe-0 ">
                                            {{$stock->description}}
                                        </td>
                                        <td class="text-start pe-0 ">
                                            Đã cân bằng kho
                                        </td>
                                    </tr>
                                    <tr class="gs-0 details-row d-none" role="row">
                                        <td></td>
                                        <td colspan="10">
                                            <div class="card card-flush">
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Table-->
                                                    <div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                                        <div id="" class="table-responsive">
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_products_table" style="width: 1134.1px;">
                                                                <colgroup>
                                                                    <col data-dt-column="1" style="width: 370.212px;">
                                                                    <col data-dt-column="2" style="width: 145.1px;">
                                                                    <col data-dt-column="3" style="width: 150.975px;">
                                                                    <col data-dt-column="4" style="width: 150.1px;">
                                                                    <col data-dt-column="5" style="width: 150.1px;">
                                                                </colgroup>
                                                                <thead>
                                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                                                    <th class="min-w-500px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Product: Activate to sort" tabindex="0">
                                                                        <span class="dt-column-title" role="button">Tên sản phẩm</span><span class="dt-column-order"></span>
                                                                    </th>
                                                                    <th class="text-end min-w-70px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0">
                                                                        <span class="dt-column-title" role="button">Tồn kho</span><span class="dt-column-order"></span>
                                                                    </th>
                                                                    <th class="text-end min-w-150px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                                                        <span class="dt-column-title" role="button">Số lượng thực tế</span><span class="dt-column-order"></span>
                                                                    </th>
                                                                    <th class="text-end min-w-150px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                                                        <span class="dt-column-title" role="button">Số lượng lệch</span><span class="dt-column-order"></span>
                                                                    </th>
                                                                    <th class="text-end min-w-150px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                                                        <span class="dt-column-title" role="button">Giá trị lệch</span><span class="dt-column-order"></span>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-black-600">
                                                                @php
                                                                    $total_increased = 0;
                                                                    $total_decreased = 0;
                                                                @endphp
                                                                @foreach($stock->detailStock as $detail)
                                                                    @php
                                                                        if ($detail->total_difference > 0){
                                                                            $total_increased +=  $detail->productSku->price * $detail->total_difference;
                                                                        }else{
                                                                            $total_decreased += $detail->total_difference * $detail->productSku->price ;
                                                                        }
                                                                    @endphp
                                                                    <tr class="main-row">
                                                                        <td colspan="1">
                                                                            {{$detail->productSku->product->name}}
                                                                            @if(!$detail->productSku->optionValue->isEmpty())
                                                                                - @foreach($detail->productSku->optionValue as $optionValue)
                                                                                    {{$optionValue->name}}
                                                                                @endforeach
                                                                            @endif
                                                                        </td>
                                                                        <td class="text-end pe-0 dt-type-numeric">
                                                                            {{$detail->stock}}
                                                                        </td>
                                                                        <td class="text-end pe-0 dt-type-numeric">
                                                                            {{$detail->ac_number}}
                                                                        </td>
                                                                        <td class="text-end pe-0 dt-type-numeric">
                                                                            {{$detail->total_difference}}
                                                                        </td>
                                                                        <td class="text-end" colspan="2">
                                                                            {{number_format($detail->value, 0, '', ',')}} VNĐ
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--end::Table-->    </div>
                                                <!--end::Card body-->
                                            </div>
                                            <div class="text-end p-5">
                                                <p>Số lượng thực tế ({{$stock->ac_number}}) :
                                                    <span class="ms-10 d-inline-block min-w-150px">{{number_format($stock->ac_total, 0, '', ',')}} VNĐ</span>
                                                </p>
                                                <p>Số lượng lệch tăng ({{$stock->qty_increased}}):
                                                    <span class="ms-10 d-inline-block min-w-150px">{{number_format($total_increased, 0, '', ',')}} VNĐ</span>
                                                </p>
                                                <p>Số lượng lệch giảm ({{$stock->qty_decreased}}):
                                                    <span class="ms-10 d-inline-block min-w-150px">{{number_format($total_decreased, 0, '', ',')}} VNĐ</span>
                                                </p>
                                                <p class="text-danger">Số lượng chênh lệch ({{$stock->qty_increased - (- $stock->qty_decreased)}}):
                                                    <span class="ms-10 d-inline-block min-w-150px">{{number_format($total_increased - (- $total_decreased), 0, '', ',')}} VNĐ</span>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                        <div id="" class="row">
                            <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                <div>
                                    <select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select><label for="dt-length-0"></label></div>
                            </div>
                            <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dt-paging paging_simple_numbers">
                                    <ul class="pagination">

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->    </div>
                <!--end::Card body-->
            </div>

            <!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
@endsection

@push('style')

@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-row').click(function () {
                var nextRow = $(this).next('.details-row'); // Chọn hàng kế tiếp có class 'details-row'
                nextRow.toggleClass('d-none'); // Thêm hoặc xóa class 'd-none'
            });
        });
    </script>
@endpush
