<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailImportGoods extends Model{

    use HasFactory;

    protected $fillable = ['id', 'import_goods_id', 'product_id', 'qty', 'price', 'discount', 'total_price'];

    public function importGoods(){
        return $this->belongsTo(ImportGoods::class, 'import_goods_id', 'id');
    }

    public function product(){
        return $this->belongsTo(ProductSku::class, 'product_id', 'id');
    }
}
