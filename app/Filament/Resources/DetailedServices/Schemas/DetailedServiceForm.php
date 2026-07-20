<?php

namespace App\Filament\Resources\DetailedServices\Schemas;

use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\ImageEntry;
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
                    ->options(fn () => Service::pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->live()
                    ->helperText('Satu Service hanya boleh punya satu Detailed Service.'),

                ImageEntry::make('logo_preview')
                    ->label('Logo (otomatis ikut Service, tidak perlu upload ulang)')
                    ->state(fn ($get) => Service::find($get('service_id'))?->logo)
                    ->imageHeight(60)
                    ->visible(fn ($get) => filled($get('service_id'))),

                TextInput::make('title_line1')
                    ->label('Judul Baris 1')
                    ->required()
                    ->maxLength(100),
                TextInput::make('title_line2')
                    ->label('Judul Baris 2')
                    ->required()
                    ->maxLength(100),

                FileUpload::make('background_image')
                    ->label('Background Image Slider')
                    ->image()
                    ->directory('detailed-service')
                    ->imageAspectRatio('16:9')
                    ->automaticallyResizeImagesToWidth('1920')
                    ->automaticallyResizeImagesMode('cover')
                    ->maxSize(5120) // Validasi server max 5 MB (5120 KB)
                    ->helperText('⚠️ Ukuran file maksimal 5 MB (Rasio 16:9). Sistem akan otomatis me-resize foto ke resolusi optimal 1080p.')
                    ->required(),

                Tabs::make('Deskripsi')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([Textarea::make('description.ID')->label('Deskripsi (ID)')->required()]),
                        Tab::make('English')
                            ->schema([Textarea::make('description.EN')->label('Description (EN)')->required()]),
                        Tab::make('日本語')
                            ->schema([Textarea::make('description.JPN')->label('説明 (JPN)')->required()]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}
