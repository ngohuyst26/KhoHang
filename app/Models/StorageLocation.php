<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageLocation extends Model{

    use HasFactory;

    protected $table = 'storage_location';
    protected $fillable = ['name', 'status'];

    public function productSku(){
        return $this->belongsToMany(ProductSku::class, 'product_sku_location',
            'storage_location_id',
            'products_sku_id');
    }
}
