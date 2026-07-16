<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'text_kicker',

        'images',

        'order',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'text_kicker' => 'array',
        'images' => 'array',
        'is_active' => 'boolean',
    ];
}
