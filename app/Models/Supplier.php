<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Supplier extends Model{

    use HasApiTokens, HasFactory;

    protected $table = 'suppliers';

    protected $fillable = ['name', 'phone', 'address', 'email', 'city', 'tax_code', 'notes', 'status'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function importGoods(){
        return $this->hasMany(ImportGoods::class);
    }

}
