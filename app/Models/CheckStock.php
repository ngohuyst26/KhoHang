<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckStock extends Model{

    use HasFactory;

    protected $fillable = ['code', 'ac_number', 'ac_total', 'total_difference', 'qty_increased', 'qty_decreased', 'description', 'status'];

    public function detailStock(){
        return $this->hasMany(DetailCheckStock::class);
    }

    public static function generateNextCode(){
        $lastSku = self::where('code', 'LIKE', 'KK%')
                       ->get()
                       ->sortByDesc(function ($sku){
                           preg_match('/KK(\d+)/', $sku->code, $matches);

                           return $matches ? intval($matches[1]) : 0;
                       })
                       ->first();

        if (!$lastSku){
            return 'KK000001';
        }
        $lastCode = $lastSku->code;
        preg_match('/KK(\d+)/', $lastCode, $matches);
        $numericPart     = $matches ? intval($matches[1]) : 0;
        $nextNumericPart = $numericPart + 1;

        return 'KK' . str_pad($nextNumericPart, 6, '0', STR_PAD_LEFT);
    }
}
