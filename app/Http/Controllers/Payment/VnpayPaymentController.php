<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class VnpayPaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $order = Orders::findOrFail($request->input('order_id'));
        if ($order->status != 'pending') {
            return response()->json(['message' => 'Đơn hàng không ở trạng thái chờ thanh toán'], 400);
        }

        $vnp_TmnCode = env('VNP_TMN_CODE');
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_Url = env('VNP_URL');
        $vnp_ReturnUrl = route('vnpay.return');
        $vnp_TxnRef = time();
        $vnp_OrderInfo = $order->id ;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $order->total_payment * 100 ;
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
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return response()->json(['payment_url' => $vnp_Url], 200);
    }

    // Xử lý kết quả thanh toán trả về từ VNPay
    public function vnpayReturn(Request $request)
    {
        $vnp_HashSecret = Config::get('vnpay.vnp_HashSecret');
        $vnp_SecureHash = $request->vnp_SecureHash;
        $inputData = array();
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            if ($request->input('vnp_ResponseCode') == '00') {
                $order_id = $request->input('vnp_OrderInfo');
                $order = Orders::findOrFail($order_id);
                $order->payment_method_id = 3;
                $order->status = 'completed';
                $order->save();
                return redirect(env('APP_METHOD') . tenant()->domain_name . env('URL_SUCCESS_VNPAY'));
            }
            else {
                return redirect(env('APP_METHOD') . tenant()->domain_name . env('URL_FAIL_VNPAY'));
            }
        } else {
            return response()->json(['message' => 'Chữ ký không hợp lệ'], 400);
        }
    }
}
