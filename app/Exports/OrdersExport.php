<?php

namespace App\Exports;

use App\Models\Orders;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Orders::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Mã đơn',
            'Tổng tiền',
            'Trạng thái',
            'Phuương thức thanh toán',
            'Trạng thái thanh toán',
            'Phuương thức vận chuyển',
            'Trạng thái vận chuyển',
            'Tiền tệ',
            'Ghi chú',
            'Mã khách hàng ',
            'Người bán',
            'Người tạo đơn',
            'Ngày tạo',
            'Ngày cập nhật',
            'Giảm giá',
            'Tiền khách trả'
        ];
    }
}
