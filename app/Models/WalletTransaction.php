<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    use HasFactory;
    protected $table = 'wallet_transactions';

    protected $fillable = ['wallet_id', 'amount', 'type', 'status', 'description'];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
