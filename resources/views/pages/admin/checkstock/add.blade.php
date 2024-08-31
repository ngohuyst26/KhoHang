@extends('layouts.master')

@section('content')
    {{--    <input type="text" id="search" placeholder="Tìm kiếm sản phẩm...">--}}
    {{--    <div id="results"></div>--}}
    {{--    <table id="cart-table">--}}
    {{--        <thead>--}}
    {{--        <tr>--}}
    {{--            <th>Tên sản phẩm</th>--}}
    {{--            <th>Giá</th>--}}
    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--        <tbody>--}}
    {{--        <!-- Các sản phẩm sẽ được thêm vào đây -->--}}
    {{--        </tbody>--}}
    {{--    </table>--}}
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
            <div class="row">
                <div class="col-9">
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center  py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" id="search" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-550px ps-12" placeholder="Tìm hàng hóa theo tên hoặc mã">
                                    <div id="results"></div>
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->

                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                <div id="" class="table-responsive">
                                    <table id="cart-table" class="table align-middle table-row-dashed fs-6 gy-5 dataTable" style="width: 1134.1px;">
                                        <colgroup>
                                            <col data-dt-column="0" style="width: 36.4px;">
                                            <col data-dt-column="1" style="width: 269.85px;">
                                            <col data-dt-column="2" style="width: 134.925px;">
                                            <col data-dt-column="3" style="width: 146.288px;">
                                            <col data-dt-column="4" style="width: 134.925px;">
                                            <col data-dt-column="5" style="width: 134.925px;">
                                            <col data-dt-column="6" style="width: 134.925px;">
                                            <col data-dt-column="7" style="width: 141.863px;">
                                        </colgroup>
                                        <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                            <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1" aria-label="



														"><span class="dt-column-title">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
															</div>
														</span><span class="dt-column-order"></span></th>
                                            <th class="min-w-280px dt-orderable-asc dt-orderable-desc dt-ordering-asc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Product: Activate to invert sorting" tabindex="0" aria-sort="ascending">
                                                <span class="dt-column-title" role="button">Tên sản phẩm</span><span class="dt-column-order"></span>
                                            </th>
                                            <th class="text-start min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="SKU: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Tồn kho</span><span class="dt-column-order"></span>
                                            </th>
                                            <th class="text-start min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Thực tế</span><span class="dt-column-order"></span>
                                            </th>
                                            <th class="text-start min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Rating: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">SL lệch</span><span class="dt-column-order"></span>
                                            </th>
                                            <th class="text-start min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="6" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Giá trị lệch</span><span class="dt-column-order"></span>
                                            </th>
                                            <th class="text-start min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="6" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Hành động</span><span class="dt-column-order"></span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600"></tbody>
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

                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body ">
                            <p class="fw-bold">Trạng thái
                                <span class="fw-normal d-inline-block min-w-50px ms-5">Phiếu tạm</span></p>
                            <p class="fw-bold">Tổng SL thực thể
                                <span id="total-quantity" class="fw-normal d-inline-block min-w-50px ms-5">0</span></p>
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Input-->
                                <input type="text" id="description" name="price" class="form-control mb-2" placeholder="Ghi chú">
                            </div>
                            <button id="submit-cart" class="w-100 btn btn-success">
                                Hoàn thành
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Products-->        </div>
        <!--end::Content container-->
    </div>

@endsection
@push('style')
@endpush
@push('script')
    <script>
        $(document).ready(function () {
            function updateTotalQuantity() {
                let totalQuantity = 0;
                $('#cart-table .quantity').each(function () {
                    totalQuantity += parseInt($(this).val());
                });
                $('#total-quantity').text(totalQuantity);
            }

            $('#search').on('input', function () {
                let query = $(this).val();

                if (query.length > 0) {
                    $.ajax({
                        url: '{{route('products.search')}}',
                        method: 'GET',
                        data: {query: query},
                        success: function (response) {
                            $('#results').html(response);
                        },
                        error: function () {
                            $('#results').html('<p>Đã xảy ra lỗi. Vui lòng thử lại.</p>');
                        }
                    });
                }
                else {
                    $('#results').empty();
                }
            });

            // Xử lý sự kiện bấm vào thẻ li để thêm sản phẩm vào bảng
            $(document).on('click', '.product-item', function () {
                let productId = $(this).data('id');
                let productName = $(this).data('name');
                let productVariant = $(this).data('variant');
                let productPrice = $(this).data('price');
                let productStock = $(this).data('stock');
                let image = $(this).data('image');
                let existingRow = $('#cart-table tbody tr').filter(function () {
                    return $(this).find('input.product-id').val() === String(productId);
                });
                if (existingRow.length > 0) {
                    // Nếu sản phẩm đã có, cập nhật số lượng
                    let quantityInput = existingRow.find('.quantity');
                    let currentQuantity = parseInt(quantityInput.val());
                    quantityInput.val(currentQuantity + 1).trigger('input');
                }
                else {
                    // Nếu sản phẩm chưa có, thêm một dòng mới
                    let quantityInput = `<input type="number" class=" form-control mb-2 quantity" value="1" min="1">`;
                    $('#cart-table tbody').append(`
                                            <tr >
                                                <input type="hidden" class="product-id" value="${productId}">
                                                <input class="price" type="hidden" value="${productPrice}">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                        <span class="symbol-label" style="background-image:url(${image});"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">${productName} ${productVariant}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start pe-3 dt-type-numeric">
                                                <span class="fw-bold">${productStock}</span>
                                            </td>
                                            <td class="text-start ps-3 dt-type-numeric" data-order="7">
                                                ${quantityInput}
                                            </td>
                                            <td class="text-start pe-0 dt-type-numeric stock-difference">0</td>
                                            <td class="text-start pe-0 total" >
                                                ${productPrice} VNĐ

                                            </td>
                                            <td class="text-start pe-0 " >
                                                <button class="btn btn-sm btn-danger remove-item">Xóa</button>
                                            </td>
                                        </tr>
            `);
                }

                // Cập nhật tổng giá, số lượng chênh lệch và tổng số lượng mỗi khi số lượng thay đổi
                $('#cart-table').on('input', '.quantity', function () {
                    let quantity = $(this).val();
                    let row = $(this).closest('tr');
                    let stock = parseInt(row.find('td:eq(2)').text());
                    let difference = parseInt(row.find('.stock-difference').text());
                    let price = parseFloat(row.find('.price').val());

                    let total = (price * difference);
                    let number = total.toLocaleString('vi-VN', {
                        style: 'decimal',
                        maximumFractionDigits: 0,
                    });
                    row.find('.total').text(number + ' VNĐ');
                    row.find('.stock-difference').text(quantity - (stock));
                    updateTotalQuantity();
                });

                // Cập nhật tổng số lượng khi thêm sản phẩm mới
                updateTotalQuantity();
            });

            // Xử lý sự kiện bấm nút xóa trong hàng để xóa sản phẩm cụ thể
            $(document).on('click', '.remove-item', function () {
                $(this).closest('tr').remove();
                updateTotalQuantity();
            });

            // Xử lý sự kiện bấm nút gửi dữ liệu để gửi thông tin sản phẩm đến máy chủ
            $('#submit-cart').on('click', function () {
                let cartData = [];

                $('#cart-table tbody tr').each(function () {
                    let skuId = parseInt($(this).find('.product-id').val());
                    let stock = parseInt($(this).find('td:eq(2)').text());
                    let quantity = parseInt($(this).find('.quantity').val());
                    let stockDifference = parseInt($(this).find('.stock-difference').text());
                    let total = parseFloat($(this).find('.total').text().replace(' VNĐ', ''));

                    cartData.push({
                        skuId: skuId,
                        stock: stock,
                        quantity: quantity,
                        stockDifference: stockDifference,
                        total: total
                    });
                });
                console.log(cartData);
                $.ajax({
                    url: '{{route('check-stocks.store')}}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',  // Đảm bảo gửi token CSRF nếu cần
                        cart: cartData
                    },
                    success: function (response) {
                        $('#cart-table tbody').empty();
                        updateTotalQuantity();
                        Swal.fire({
                            text: "Tạo thành công!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    },
                    error: function () {
                    }
                });
            });
        });


    </script>
@endpush
