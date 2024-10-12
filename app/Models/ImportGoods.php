<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportGoods extends Model{

    use HasFactory;

    protected $fillable = ['id', 'supplier_id', 'code', 'status', 'total_goods', 'discount', 'supplier_payments', 'description'];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function detailImportGoods(){
        return $this->hasMany(DetailImportGoods::class);
    }
}
