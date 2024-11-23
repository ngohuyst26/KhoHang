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
        'introduction',
        'privacy_policy',
        'return_policy',
        'facebook_link',
        'youtube_link',
        'tiktok_link',
    ];
}

