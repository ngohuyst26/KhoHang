<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuValue extends Model{

    use HasFactory;

    protected $table = 'sku_value';
    protected $fillable = ['sku_id', 'product_id', 'option_id', 'option_value_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function productSku(){
        return $this->belongsTo(ProductSku::class, 'sku_id', 'id');
    }

    public function options(){
        return $this->belongsTo(Option::class,);
    }

    public function optionValue(){
        return $this->belongsTo(OptionValue::class, 'option_value_id');
    }
}
