<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    use HasFactory;

    protected $fillable = ['name', 'description', 'status', 'category_id', 'brand_id', 'supplier_id'];

    public function productSku(){
        return $this->hasMany(ProductSku::class, 'product_id', 'id',);
    }

    public function optionValue(){
        return $this->hasMany(OptionValue::class, 'product_id', 'id');
    }

    public function skuValue(){
        return $this->hasMany(SkuValue::class, 'product_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function orderItems(){
        return $this->hasMany(OrderItems::class, 'product_id', 'id',);
    }
}
