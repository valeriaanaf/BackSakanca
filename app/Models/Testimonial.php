<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_name',
        'content',
        'rating',
        'is_active',
        'order',
    ];

    protected $casts = [
        'content'   => 'array',   // jsonb i18n
        'is_active' => 'boolean',
    ];
}