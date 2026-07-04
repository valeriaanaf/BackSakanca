<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'hero_sections';     // agar model membaca tabel hero_sections

    protected $fillable = [
        'tagline',
        'title',
        'subtitle',
        'cta_primary_text',
        'cta_primary_url',
        'background_image',
        'is_active',
    ];

    protected $casts = [
        'tagline' => 'array',
        'title' => 'array',
        'subtitle' => 'array',
        'is_active' => 'boolean',
    ];
}
