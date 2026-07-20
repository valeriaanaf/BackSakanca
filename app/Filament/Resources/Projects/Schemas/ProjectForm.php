<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->label('Sakanca (Brand)')
                    ->options(fn () => Service::pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required(),

                Tabs::make('Nama & Deskripsi')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('name.ID')
                                    ->label('Nama Project (ID)')
                                    ->required(),
                                Textarea::make('description.ID')
                                    ->label('Deskripsi (ID)')
                                    ->required(),
                            ]),
                        Tab::make('English')
                            ->schema([
                                TextInput::make('name.EN')
                                    ->label('Nama Project (EN)')
                                    ->required(),
                                Textarea::make('description.EN')
                                    ->label('Description (EN)')
                                    ->required(),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                TextInput::make('name.JPN')
                                    ->label('Nama Project (JPN)')
                                    ->required(),
                                Textarea::make('description.JPN')
                                    ->label('Deskripsi (JPN)')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('projects/thumbnails')
                    ->imageAspectRatio('16:9')
                    ->automaticallyResizeImagesToWidth('1200')
                    ->automaticallyResizeImagesMode('cover')
                    ->maxSize(5120)
                    ->helperText('⚠️ Maksimal 5 MB (Rasio 16:9).')
                    ->required(),

                TextInput::make('url')
                    ->label('URL Eksternal (Opsional)')
                    ->url(),

                TextInput::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }
}
