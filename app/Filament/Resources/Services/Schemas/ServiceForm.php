<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Layanan / Divisi')
                    ->required()
                    ->maxLength(100),

                TextInput::make('slug')
                    ->label('Slug URL (Otomatis/Manual)')
                    ->required()
                    ->maxLength(150),

                Tabs::make('Deskripsi Layanan Multi-Bahasa')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                Textarea::make('description.ID')
                                    ->label('Deskripsi (ID)')
                                    ->required(),
                            ]),
                        Tab::make('English')
                            ->schema([
                                Textarea::make('description.EN')
                                    ->label('Description (EN)')
                                    ->required(),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                Textarea::make('description.JPN')
                                    ->label('説明 (JPN)')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('logo')
                    ->label('Icon Class (Contoh: bx-code-alt)')
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Service Image (Detailed Section Banner)')
                    ->image()
                    ->directory('services'),

                TextInput::make('color_theme')
                    ->label('Color Theme Hex/Class')
                    ->maxLength(50),

                TextInput::make('order')
                    ->label('Urutan Tampilan')
                    ->required()
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Aktifkan Layanan')
                    ->required()
                    ->default(true),
            ]);
    }
}
