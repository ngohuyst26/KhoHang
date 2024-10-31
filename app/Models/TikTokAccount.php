<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TikTokAccount extends Model{

    use HasFactory;

    protected $fillable = ['user_id', 'account_tiktok_name', 'access_token', 'refresh_token', 'expires_in', 'shop_cipher', 'shop_id', 'auth_code'];

    public function user(){
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
