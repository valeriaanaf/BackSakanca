<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'description',
        'color_theme',
        'order',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array',
        'is_active' => 'boolean',
    ];
}
