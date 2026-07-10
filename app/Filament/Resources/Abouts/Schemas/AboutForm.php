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
                    ->label('Heading Utama (Fixed)')
                    ->required()
                    ->maxLength(100),

                TextInput::make('title2')
                    ->label('Sub-Heading Utama (Fixed)')
                    ->required()
                    ->maxLength(100),

                Tabs::make('Deskripsi Perusahaan Multi-Bahasa')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                Textarea::make('description.ID')
                                    ->label('Deskripsi Lengkap (ID)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                        Tab::make('English')
                            ->schema([
                                Textarea::make('description.EN')
                                    ->label('Full Description (EN)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                Textarea::make('description.JPN')
                                    ->label('詳細説明 (JPN)')
                                    ->rows(5)
                                    ->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('logo')
                    ->label('Logo Identifier')
                    ->maxLength(255),

                FileUpload::make('background_image')
                    ->label('Foto Bersama Tim (Background)')
                    ->image()
                    ->directory('about-backgrounds'),
            ]);
    }
}
