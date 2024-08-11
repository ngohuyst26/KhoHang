<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model{

    use HasFactory;

    protected $table = 'option_value';
    protected $fillable = ['product_id', 'option_id', 'name'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function sku(){
        return $this->belongsToMany(ProductSku::class, 'sku_value', 'option_value_id');
    }

    public function option(){
        return $this->belongsTo(Option::class, 'option_id','id');
    }
}
