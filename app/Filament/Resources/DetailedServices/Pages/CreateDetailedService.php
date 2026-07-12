<?php

namespace App\Filament\Resources\DetailedServices\Pages;

use App\Filament\Resources\DetailedServices\DetailedServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDetailedService extends CreateRecord
{
    protected static string $resource = DetailedServiceResource::class;
}