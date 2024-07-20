<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuUnit extends Model{

    use HasFactory;

    protected $table = 'sku_unit';
    protected $fillable = ['product_id', 'name', 'exchange_value', 'sale_price'];

    public function productSku(){
        return $this->belongsTo(ProductSku::class, 'product_id', 'id');
    }

}
