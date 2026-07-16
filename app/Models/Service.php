<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'slug',
        'name',
        'logo',
        'col',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function detailedService(): HasOne
    {
        return $this->hasOne(DetailedService::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
