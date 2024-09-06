<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'avatar',
        'date_of_birth',
        'gender',
        'indentification',
        'notes',
        'start_date',
    ];
}
