<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailedService extends Model
{
    protected $table = 'detailed_services';

    protected $fillable = [
        'service_id',
        'title_line1',
        'title_line2',
        'background_image',
        'description',
        'order',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array',
        'is_active' => 'boolean',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
