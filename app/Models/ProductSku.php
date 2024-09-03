<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model{

    use HasFactory;

    protected $table = 'product_sku';
    protected $fillable = ['product_id', 'price', 'sale_price', 'inventory', 'barcode', 'code'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id',);
    }

    public function photo(){
        return $this->hasMany(Photo::class, 'product_sku_id');
    }

    public function storageLocation(){
        return $this->belongsToMany(
            StorageLocation::class,
            'product_sku_location',
            'product_sku_id',
            'storage_location_id'
        );
    }

    public function optionValue(){
        return $this->belongsToMany(OptionValue::class, 'sku_value', 'sku_id');
    }

    public function skuUnit(){
        return $this->hasMany(SkuUnit::class, 'product_sku_id');
    }

    public function skuValue(){
        return $this->hasMany(SkuValue::class, 'sku_id', 'id');
    }

    public static function generateNextCode(){
        $lastSku = self::where('code', 'LIKE', 'SP%')
                       ->get()
                       ->sortByDesc(function ($sku){
                           preg_match('/SP(\d+)/', $sku->code, $matches);

                           return $matches ? intval($matches[1]) : 0;
                       })
                       ->first();

        if (!$lastSku){
            return 'SP000001';
        }
        $lastCode = $lastSku->code;
        preg_match('/SP(\d+)/', $lastCode, $matches);
        $numericPart     = $matches ? intval($matches[1]) : 0;
        $nextNumericPart = $numericPart + 1;

        return 'SP' . str_pad($nextNumericPart, 6, '0', STR_PAD_LEFT);
    }
}