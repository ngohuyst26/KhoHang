<?php

namespace App\Services;

use App\Models\Orders;
use App\Models\Wallet;
use App\Models\WalletTransaction;
use Exception;
use Illuminate\Support\Facades\DB;


class WalletService{

    public function payOrderUsingWallet(Orders $order)
    {
        $user = $order->user;
        $wallet = Wallet::where('user_id', $user->id)->first();

        if (!$wallet) {
            throw new Exception('Tài khoản chưa có ví');
        }

        if ($wallet->balance < $order->total_payment) {
            throw new Exception('Số dư trong ví không đủ để thanh toán');
        }

        DB::beginTransaction();
        try {
            $wallet->withdraw($order->total_payment);

            WalletTransaction::create([
                'wallet_id' => $wallet->id,
                'amount' => $order->total_payment,
                'type' => 'payment',
                'status' => 'completed',
                'description' => 'Payment for Order #' . $order->id,
            ]);

            $order->payment_method_id = 1;
            $order->status = 'completed';
            $order->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function refundToWallet(Orders $order)
    {
        $user = $order->user;
        $wallet = Wallet::where('user_id', $user->id)->first();

        if (!$wallet) {
            throw new Exception('Tài khoản chưa có ví');
        }

        $createdAt = $order->created_at;
        if ($createdAt->addHours(24)->isPast()) {
            throw new Exception('Đơn hàng chỉ được hủy trong vòng 24h');
        }

        DB::beginTransaction();
        try {
            $wallet->deposit($order->total_payment);

            WalletTransaction::create([
                'wallet_id' => $wallet->id,
                'amount' => $order->total_payment,
                'type' => 'refund',
                'status' => 'completed',
                'description' => 'Refund for Order #' . $order->id,
            ]);

            $order->status = 'cancelled';
            $order->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

}