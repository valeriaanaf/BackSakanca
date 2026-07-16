<?php

namespace App\Filament\Resources\DetailedServices\Pages;

use App\Filament\Resources\DetailedServices\DetailedServiceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDetailedServices extends ListRecords
{
    protected static string $resource = DetailedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
