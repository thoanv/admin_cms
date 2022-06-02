<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutU extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo_admin',
        'logo',
        'favicon',
        'thumbnail',

        'company',
        'email',
        'address',
        'phone',
        'fax',
        'description',
        'meta_header',
        'meta_keywords',
        'meta_description',

        'video_intro',
        'facebook',
        'fanpage_facebook',
        'instagram',
        'twitter',
        'youtube',
        'created_by',
    ];
}
