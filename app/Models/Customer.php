<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'city_name',
        'date_of_birth',
        'address',
        'customer_type',
        'tax_code',
        'email',
        'facebook',
        'status',
        'notes',
        'created_at',
        'updated_at'
    ];

    public function orders(){
        return $this->hasMany(Orders::class);
    }
}
