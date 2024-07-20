<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model{

    use HasFactory;

    protected $table = 'options';
    protected $fillable = ['name', 'status'];

    public function product(){
        return $this->hasOneThrough(Product::class, OptionValue::class);
    }

    public function optionValue(){
        return $this->hasMany(OptionValue::class, 'option_id');
    }

    public function skuValue(){
        return $this->hasMany(SkuValue::class, 'option_id');
    }

}
