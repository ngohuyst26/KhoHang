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

    public static function generateNextCode(){
        $lastImportGoods = self::where('code', 'LIKE', 'NK%')
                               ->get()
                               ->sortByDesc(function ($sku){
                                   preg_match('/NK(\d+)/', $sku->code, $matches);

                                   return $matches ? intval($matches[1]) : 0;
                               })
                               ->first();

        if (!$lastImportGoods){
            return 'NK000001';
        }
        $lastCode = $lastImportGoods->code;
        preg_match('/NK(\d+)/', $lastCode, $matches);
        $numericPart     = $matches ? intval($matches[1]) : 0;
        $nextNumericPart = $numericPart + 1;

        return 'NK' . str_pad($nextNumericPart, 6, '0', STR_PAD_LEFT);
    }
}
