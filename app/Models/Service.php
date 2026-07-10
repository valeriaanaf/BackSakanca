<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'image',
        'description',
        'color_theme',
        'order',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array', // Hanya description yang di-cast sebagai JSONB multi-bahasa
        'is_active' => 'boolean',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
