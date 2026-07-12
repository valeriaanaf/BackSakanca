<?php

namespace App\Filament\Resources\DetailedServices\Schemas;

use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class DetailedServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->label('Terhubung ke Service')
                    ->options(fn () => Service::pluck('title', 'id'))
                    ->searchable()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('Satu Service hanya boleh punya satu Detailed Service.'),

                TextInput::make('title_line1')
                    ->label('Judul Baris 1')
                    ->required()
                    ->maxLength(100),
                TextInput::make('title_line2')
                    ->label('Judul Baris 2')
                    ->required()
                    ->maxLength(100),

                FileUpload::make('bg_image')
                    ->label('Background Image Slider')
                    ->image()
                    ->directory('detailed-service-backgrounds')
                    ->required(),

                Tabs::make('Deskripsi')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                Textarea::make('description.ID')->label('Deskripsi (ID)')->required(),
                            ]),
                        Tab::make('English')
                            ->schema([
                                Textarea::make('description.EN')->label('Description (EN)')->required(),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                Textarea::make('description.JPN')->label('説明 (JPN)')->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}