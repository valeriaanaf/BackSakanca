<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about_sections'; // agar model membaca tabel about_sections

    protected $fillable = [
        'title',
        'description',
        'logo',
        'background_image',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];
}
