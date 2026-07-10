<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'description',
        'thumbnail',
        'url',
        'year',
        'is_featured',
        'order',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
