<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TikTokProductLink extends Model{

    use HasFactory;

    protected $table = 'tiktok_product_links';

    protected $fillable = [
        'product_id',
        'sku_id',
        'tiktok_product_id',
        'tiktok_product_name',
        'tiktok_sku_id',
        'tiktok_sku_code',
        'price',
        'currency',
    ];

    /**
     * Get the product that owns the TikTokProductLink.
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the SKU that owns the TikTokProductLink.
     */
    public function sku(){
        return $this->belongsTo(ProductSku::class);
    }
}
