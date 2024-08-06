<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = ['grand_total','discount','total_payment','user_create_id','created_at','updated_at'];

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
