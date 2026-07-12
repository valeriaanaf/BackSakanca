<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'color',
        'col',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relasi 1:1 ke DetailedService (dikelola di resource Filament terpisah)
     */
    public function detailedService(): HasOne
    {
        return $this->hasOne(DetailedService::class);
    }

    /**
     * Relasi 1:banyak ke Portfolio Projects
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}