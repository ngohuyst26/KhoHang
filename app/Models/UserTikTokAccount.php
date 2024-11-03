<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTikTokAccount extends Model{

    use HasFactory;

    protected $fillable = ['id', 'subdomain', 'open_id', 'tenant_id'];
}
