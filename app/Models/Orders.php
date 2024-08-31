<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'grand_total',
        'discount',
        'order_status',
        'payment_method',
        'payment_status',
        'shipping_method',
        'shipping_status',
        'currency',
        'notes',
        'customer_id',
        'order_status',
        'customer_id',
        'user_create_id',
        'users',
        'created_at',
        'updated_at',
        'total_payment'
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
