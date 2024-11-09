<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','product_sku_id','quantity','unit_amount','total_amount','created_at','updated_at'];

    public function orders(){
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }

    public function product_sku(){
        return $this->belongsTo(ProductSku::class, 'product_sku_id', 'id');
    }
}
