<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model{

    use HasFactory;

    protected $table = 'product_sku';
    protected $fillable = ['product_id', 'price', 'sale_price', 'inventory', 'barcode'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function photo(){
        return $this->hasMany(Photo::class, 'product_sku_id');
    }

    public function storageLocation(){
        return $this->belongsToMany(StorageLocation::class, 'sku_location', 'products_sku_id',
            'storage_location_id');
    }

    public function optionValue(){
        return $this->belongsToMany(OptionValue::class, 'sku_value', 'sku_id');
    }

    public function skuUnit(){
        return $this->hasMany(SkuUnit::class, 'product_sku_id');
    }
}
