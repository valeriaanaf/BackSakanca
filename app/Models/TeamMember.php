<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = [
        'name',
        'surname',

        'focus',
        'description1',
        'description2',

        'skills',

        'photo',
        'background_image',

        'instagram_url',
        'email',
        'github_url',
        'linkedin_url',

        'order',
        'is_active',
    ];

    protected $casts = [
        'focus' => 'array',
        'description1' => 'array',
        'description2' => 'array',
        'skills' => 'array', // Cast array agar Filament membaca TagsInput/Tags otomatis
        'is_active' => 'boolean',
    ];
}
