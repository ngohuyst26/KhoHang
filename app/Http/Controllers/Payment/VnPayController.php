<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class VnPayController extends Controller
{
    public function createPayment(Request $request)
    {
        $vnp_TmnCode = Config::get('vnpay.vnp_TmnCode');
        $vnp_HashSecret = Config::get('vnpay.vnp_HashSecret');
        $vnp_Url = Config::get('vnpay.vnp_Url');
        $vnp_ReturnUrl = Config::get('vnpay.vnp_ReturnUrl');
        $vnp_TxnRef = time(); // Mã đơn hàng
        $vnp_OrderInfo = 'Thanhdonhang';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->amount; // Số tiền thanh toán (nhân 100 để chuyển sang đơn vị VNĐ)
        $vnp_Locale = 'vn';
        $vnp_IpAddr = $request->ip();

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => now()->format('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = "";
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            $hashdata .= $key . "=" . $value . '&';
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        $vnpSecureHash = hash('sha256', $vnp_HashSecret . rtrim($hashdata, '&'));
        $vnp_Url .= 'vnp_SecureHashType=sha256&vnp_SecureHash=' . $vnpSecureHash;

        return response()->json(['payment_url' => $vnp_Url], 200);
    }

    // Xử lý kết quả thanh toán trả về từ VNPay
    public function vnpayReturn(Request $request)
    {
        $vnp_HashSecret = Config::get('vnpay.vnp_HashSecret');
        $inputData = $request->all();
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $hashData = '';
        foreach ($inputData as $key => $value) {
            $hashData .= $key . '=' . $value . '&';
        }
        $secureHash = hash('sha256', $vnp_HashSecret . rtrim($hashData, '&'));
        if ($secureHash == $vnp_SecureHash) {
            if ($inputData['vnp_ResponseCode'] == '00') {
                return response()->json(['message' => 'Successfully', 'data' => $inputData], 200);
            } else {
                return response()->json(['message' => 'Fail', 'data' => $inputData], 400);
            }
        } else {
            return response()->json(['message' => 'Chu ky khon hop le'], 400);
        }
    }
}
