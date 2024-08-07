<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckStock extends Model{

    use HasFactory;

    protected $fillable = ['ac_number', 'ac_total', 'total_difference', 'qty_increased', 'qty_decreased', 'description', 'status'];

    public function detailStock(){
        return $this->hasMany(DetailCheckStock::class);
    }
}
