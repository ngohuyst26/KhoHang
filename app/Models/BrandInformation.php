<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandInformation extends Model{

    use HasFactory;

    protected $fillable = [
        'logo',
        'name_brand',
        'phone',
        'email',
        'facebook_link',
        'youtube_link',
        'tiktok_link',
    ];
}

