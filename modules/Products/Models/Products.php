<?php

namespace modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model{

    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'status', 'category_id', 'brand_id', 'supplier_id'];


}
