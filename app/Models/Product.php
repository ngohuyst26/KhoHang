<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model{

    use HasApiTokens, HasFactory;

    protected $fillable = ['name', 'description', 'info_product', 'status', 'category_id', 'brand_id', 'supplier_id', 'tiktok_product_id', 'weight'];

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

    public function getImageAttribute(){
        // Kiểm tra nếu có photo trong productSku, và trả về url ảnh
        $photo = $this->productSku->first()?->photo; // Lấy photo của productSku đầu tiên (nếu có)

        // Nếu có ảnh, trả về đường dẫn ảnh, nếu không, trả về null
        return $photo ? $photo->url : NULL;
    }
}