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
                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a type="button" href="{{route('products.trash')}}" class="btn btn-light-primary me-3">
                            <i class="ki-duotone ki-trash-square fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            Thùng rác
                        </a>

                        <!--begin::Add product-->
                        <a href="{{route('products.create')}}" class="btn btn-primary">
                            Thêm sản phẩm
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
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_products_table" style="width: 1134.1px;">
                                <colgroup>
                                    <col data-dt-column="0" style="width: 36.4px;">
                                    <col data-dt-column="1" style="width: 270.212px;">
                                    <col data-dt-column="2" style="width: 135.1px;">
                                    <col data-dt-column="3" style="width: 144.975px;">
                                    <col data-dt-column="4" style="width: 135.1px;">
                                    <col data-dt-column="5" style="width: 135.1px;">
                                    <col data-dt-column="6" style="width: 135.1px;">
                                    <col data-dt-column="7" style="width: 142.113px;">
                                </colgroup>
                                <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                    <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1" aria-label="



            "><span class="dt-column-title">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
                </div>
            </span><span class="dt-column-order"></span></th>
                                    <th class="min-w-200px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="2" colspan="2" aria-label="Product: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Tên sản phẩm</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-70px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Tồn kho</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Giá vốn</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Giá bán</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="6" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Trạng thái</span><span class="dt-column-order"></span>
                                    </th>
                                    <th class="text-end min-w-70px dt-orderable-none" data-dt-column="7" rowspan="1" colspan="1" aria-label="Actions">
                                        <span class="dt-column-title">Hành động</span><span class="dt-column-order"></span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($products as $product)
                                    <tr class="main-row">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="#" class="symbol symbol-50px">
                                                    <span class="symbol-label" style="background-image:url({{!$product->productSku->first()?->photo->isEmpty() ? Storage::url($product->productSku->first()?->photo->first()->url) : ''}});"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <h2 href="" class="text-gray-800 text-hover-primary fs-5 fw-bold cursor-pointer" data-kt-ecommerce-product-filter="product_name">
                                                        {{$product->name.' '}}
                                                        @if($product->productSku->first()->optionValue->count() > 0)
                                                            (Có {{$product->productSku->count()}} biến thể)
                                                        @endif
                                                    </h2>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 dt-type-numeric" data-order="1">
                                            <span class="badge badge-light-{{$product->productSku->sum('inventory') > 100 ? 'success' : ($product->productSku->sum('inventory') >= 20 ? 'primary' : 'warning')}}">Tồn kho {{$product->productSku->sum('inventory') > 100 ? 'cao' : ($product->productSku->sum('inventory') >= 20 ? 'ổn' : 'thấp')}}</span>
                                            <span class="fw-bold text-{{$product->productSku->sum('inventory') > 100 ? 'success' : ($product->productSku->sum('inventory') >= 20 ? 'primary' : 'warning')}} ms-3">{{$product->productSku->sum('inventory')}}</span>
                                        </td>
                                        <td class="text-end pe-0 dt-type-numeric">{{number_format($product->productSku->avg('price'), 0, '', ',')}}
                                            VNĐ
                                        </td>
                                        <td class="text-end pe-0 dt-type-numeric">{{number_format($product->productSku->avg('sale_price'), 0, '', ',')}}
                                            VNĐ
                                        </td>
                                        <td class="text-end pe-0" data-order="Published">
                                            <!--begin::Badges-->
                                            <div class="badge badge-light-success">Hoạt động</div>
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                Hành động
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                @if($product->productSku->count() == 1)
                                                    <div class="menu-item px-3">
                                                        <a href="{{route('products.edit',['product' => $product->id,'skuId' => $product->productSku->first()->id ])}}" class="menu-link px-3">
                                                            Sửa
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                @endif

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#delete_{{$product->id}}" data-kt-ecommerce-product-filter="delete_row">
                                                        Xóa
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <div class="modal fade" tabindex="-1" id="delete_{{$product->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Xóa sản phẩm</h3>
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <form action="{{route('products.destroy',['product' => $product->id])}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Bạn có chắc là muốn xóa sản phẩm "{{$product->name}}" !</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-danger">Xóa luôn</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>

                                    @if($product->productSku->first()->optionValue->count() > 0)

                                        <tr class="gs-0 details-row d-none" role="row">
                                            <td></td>
                                            <td colspan="7">
                                                <div class="card card-flush">
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                        <!--begin::Table-->
                                                        <div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                                            <div id="" class="table-responsive">
                                                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_products_table" style="width: 1134.1px;">
                                                                    <colgroup>
                                                                        <col data-dt-column="0" style="width: 36.4px;">
                                                                        <col data-dt-column="1" style="width: 270.212px;">
                                                                        <col data-dt-column="2" style="width: 135.1px;">
                                                                        <col data-dt-column="3" style="width: 144.975px;">
                                                                        <col data-dt-column="4" style="width: 135.1px;">
                                                                        <col data-dt-column="5" style="width: 135.1px;">
                                                                        <col data-dt-column="6" style="width: 135.1px;">
                                                                        <col data-dt-column="7" style="width: 142.113px;">
                                                                    </colgroup>
                                                                    <thead>
                                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                                                        <th class="min-w-200px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="2" colspan="3" aria-label="Product: Activate to sort" tabindex="0">
                                                                            <span class="dt-column-title" role="button">Tên biến thể</span><span class="dt-column-order"></span>
                                                                        </th>
                                                                        <th class="text-end min-w-70px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0">
                                                                            <span class="dt-column-title" role="button">Tồn kho</span><span class="dt-column-order"></span>
                                                                        </th>
                                                                        <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                                                            <span class="dt-column-title" role="button">Giá vốn</span><span class="dt-column-order"></span>
                                                                        </th>
                                                                        <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0">
                                                                            <span class="dt-column-title" role="button">Giá bán</span><span class="dt-column-order"></span>
                                                                        </th>
                                                                        <th class="text-end min-w-70px dt-orderable-none" data-dt-column="7" rowspan="1" colspan="2" aria-label="Actions">
                                                                            <span class="dt-column-title">Hành động</span><span class="dt-column-order"></span>
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody class="fw-semibold text-gray-600">
                                                                    @foreach($product->productSku as $sku)
                                                                        <tr class="main-row">
                                                                            <td>
                                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                                </div>
                                                                            </td>
                                                                            <td colspan="2">
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Thumbnail-->
                                                                                    <a href="#" class="symbol symbol-50px">
                                                                                        <span class="symbol-label" style="background-image:url({{Storage::url($sku->photo->first()?->url)}});"></span>
                                                                                    </a>
                                                                                    <!--end::Thumbnail-->

                                                                                    <div class="ms-5">
                                                                                        <!--begin::Title-->
                                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">
                                                                                            {{$product->name}}
                                                                                            - @foreach($sku->optionValue as $optionValue)
                                                                                                {{$optionValue->name}}
                                                                                            @endforeach
                                                                                        </a>
                                                                                        <!--end::Title-->
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-end pe-0 dt-type-numeric" data-order="1">
                                                                                <span class="badge badge-light-{{$sku->inventory > 100 ? 'success' : ($sku->inventory >= 20 ? 'primary' : 'warning')}}">Tồn kho {{$sku->inventory > 100 ? 'cao' : ($sku->inventory >= 20 ? 'ổn' : 'thấp')}}</span>
                                                                                <span class="fw-bold text-{{$sku->inventory > 100 ? 'success' : ($sku->inventory >= 20 ? 'primary' : 'warning')}} ms-3">{{$sku->inventory}}</span>
                                                                            </td>
                                                                            <td class="text-end pe-0 dt-type-numeric">{{number_format($sku->price, 0, '', ',')}}
                                                                                VNĐ
                                                                            </td>
                                                                            <td class="text-end pe-0 dt-type-numeric">{{number_format($sku->sale_price, 0, '', ',')}}
                                                                                VNĐ
                                                                            </td>
                                                                            <td class="text-end" colspan="2">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                    Hành động
                                                                                    <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                                                                </a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="{{route('products.edit',['product' => $product->id,'skuId' => $sku->id])}}" class="menu-link px-3">
                                                                                            Sửa
                                                                                        </a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
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
                                            </td>
                                        </tr>
                                    @endif
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
                                        {{ $products->links()}}
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
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.main-row').click(function () {
                var nextRow = $(this).next('.details-row'); // Chọn hàng kế tiếp có class 'details-row'
                nextRow.toggleClass('d-none');
            });
        });
    </script>
@endpush
