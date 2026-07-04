<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    protected $fillable = [
        'service_id',
        'title',
        'description',
        'thumbnail',
        'url',
        'year',
        'order',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array',
        'is_active' => 'boolean',
    ];
}
