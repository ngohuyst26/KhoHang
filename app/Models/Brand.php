<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Brand extends Model{

    use HasApiTokens, HasFactory;

    protected $table = 'brands';
    protected $fillable = ['name', 'description', 'status'];

    public function product(){
        return $this->hasMany(Product::class);
    }

}
