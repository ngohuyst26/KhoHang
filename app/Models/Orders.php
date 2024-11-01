<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'discount',
        'order_status',
        'payment_method',
        'payment_status',
        'notes',
        'order_status',
        'customer_id',
        'created_at',
        'updated_at',
        'total_payment',
    ];
    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_create_id', 'id');
    }

    public function orderItems(){
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }

}
