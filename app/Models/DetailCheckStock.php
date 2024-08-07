<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCheckStock extends Model{

    use HasFactory;

    protected $fillable = ['stock', 'check_stock_id', 'product_sku_id', 'ac_number', 'total_difference', 'value',];

    public function checkStock(){
        return $this->belongsTo(CheckStock::class);
    }

    public function productSku(){
        return $this->belongsTo(ProductSku::class);
    }


}
