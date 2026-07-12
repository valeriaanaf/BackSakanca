<?php

namespace App\Filament\Resources\DetailedServices\Pages;

use App\Filament\Resources\DetailedServices\DetailedServiceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDetailedService extends EditRecord
{
    protected static string $resource = DetailedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}