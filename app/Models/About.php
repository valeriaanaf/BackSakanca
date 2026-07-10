<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_sections';

    protected $fillable = [
        'title1',
        'title2',
        'description',
        'logo',
        'background_image',
    ];

    protected $casts = [
        'description' => 'array', // hanya description yang jsonb
    ];
}
