@extends('layouts.master')

@section('content')
    <input type="text" id="search" placeholder="Tìm kiếm sản phẩm...">
    <div id="results"></div>
    <table id="cart-table">
        <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>
        </thead>
        <tbody>
        <!-- Các sản phẩm sẽ được thêm vào đây -->
        </tbody>
    </table>
@endsection
@push('style')
@endpush
@push('script')
    <script>
        $(document).ready(function () {
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

            // Xử lý sự kiện bấm nút thêm vào bảng
            $(document).on('click', '.add-to-table', function () {
                let productName = $(this).data('name');
                let productPrice = $(this).data('price');
                let existingRow = $('#cart-table tbody tr').filter(function () {
                    return $(this).find('td:eq(0)').text() === productName;
                });

                if (existingRow.length > 0) {
                    // Nếu sản phẩm đã có, cập nhật số lượng
                    let quantityInput = existingRow.find('.quantity');
                    let currentQuantity = parseInt(quantityInput.val());
                    quantityInput.val(currentQuantity + 1).trigger('input');
                }
                else {
                    // Nếu sản phẩm chưa có, thêm một dòng mới
                    let quantityInput = `<input type="number" class="quantity" value="1" min="1">`;
                    $('#cart-table tbody').append(`
                <tr>
                    <td>${productName}</td>
                    <td>${productPrice} VNĐ</td>
                    <td>${quantityInput}</td>
                    <td class="total">${productPrice} VNĐ</td>
                </tr>
            `);
                }

                // Cập nhật tổng giá mỗi khi số lượng thay đổi
                $('#cart-table').on('input', '.quantity', function () {
                    let quantity = $(this).val();
                    let price = $(this).closest('tr').find('td:eq(1)').text().replace(' VNĐ', '');
                    let total = (price * quantity).toFixed(2);
                    $(this).closest('tr').find('.total').text(total + ' VNĐ');
                });
            });
        });

    </script>
@endpush
