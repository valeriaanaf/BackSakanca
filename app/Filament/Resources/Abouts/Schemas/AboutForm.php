<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title1')
                    ->label('Heading Utama')
                    ->required()
                    ->maxLength(100),

                TextInput::make('title2')
                    ->label('Sub-Heading Utama')
                    ->required()
                    ->maxLength(100),

                Tabs::make('Deskripsi Multi-Bahasa')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                Textarea::make('description.ID')
                                    ->label('Deskripsi Lengkap (ID)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                        Tab::make('Inggris')
                            ->schema([
                                Textarea::make('description.EN')
                                    ->label('Deskripsi Lengkap (EN)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                        Tab::make('Jepang')
                            ->schema([
                                Textarea::make('description.JPN')
                                    ->label('Deskripsi Lengkap (JPN)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('logo')
                    ->label('Logo Identifier')
                    ->maxLength(255),

                FileUpload::make('background_image')
                    ->label('Foto Background About')
                    ->image()
                    ->directory('about'),
            ]);
    }
}
