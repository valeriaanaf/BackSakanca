<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'hero_sections';

    protected $fillable = [
        'title1',
        'title2',
        'subtitle',
        'cta_primary',
        'background_images',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'subtitle' => 'array',
            'cta_primary' => 'array',
            'background_images' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
