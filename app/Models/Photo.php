<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model{

    use HasFactory;

    protected $fillable = ['product_sku_id', 'url', 'alt_text'];

    public function productSku(){
        return $this->belongsTo(ProductSku::class, 'product_sku_id');
    }
}
