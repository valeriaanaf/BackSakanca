<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';

    protected $fillable = [
        'name',
        'username',
        'surname',
        'role',
        'description1',
        'description2',
        'skills',
        'focus',
        'tools',
        'style',
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
        'role' => 'array',
        'description1' => 'array',
        'description2' => 'array',
        'skills' => 'array', // Cast array agar Filament membaca TagsInput/Tags otomatis
        'focus' => 'array',
        'style' => 'array',
        'is_active' => 'boolean',
    ];
}
