<?php

namespace App\Filament\Resources\DetailedServices;

use App\Filament\Resources\DetailedServices\Pages\CreateDetailedService;
use App\Filament\Resources\DetailedServices\Pages\EditDetailedService;
use App\Filament\Resources\DetailedServices\Pages\ListDetailedServices;
use App\Filament\Resources\DetailedServices\Schemas\DetailedServiceForm;
use App\Filament\Resources\DetailedServices\Tables\DetailedServicesTable;
use App\Models\DetailedService;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DetailedServiceResource extends Resource
{
    protected static ?string $model = DetailedService::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $recordTitleAttribute = 'title_line1';

    public static function form(Schema $schema): Schema
    {
        return DetailedServiceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailedServicesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDetailedServices::route('/'),
            'create' => CreateDetailedService::route('/create'),
            'edit' => EditDetailedService::route('/{record}/edit'),
        ];
    }
}