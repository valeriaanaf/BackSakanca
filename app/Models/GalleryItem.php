<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = [
        'image',
        'caption',
        'order',
        'category',
        'is_active',
    ];

    protected $casts = [
        'caption' => 'array',
        'is_active' => 'boolean',
    ];
}
