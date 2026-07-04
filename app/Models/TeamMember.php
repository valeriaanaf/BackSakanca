<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'skills',
        'focus',
        'tools',
        'style',
        'photo',
        'instagram_url',
        'linkedin_url',
        'github_url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'role' => 'array',
        'bio' => 'array',
        'skills' => 'array',
        'focus' => 'array',
        'style' => 'array',
        'is_active' => 'boolean',
    ];
}
