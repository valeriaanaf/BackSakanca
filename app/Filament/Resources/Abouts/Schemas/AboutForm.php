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

                FileUpload::make('logo')
                    ->label('Logo Identifier (Opsional)')
                    ->image()
                    ->directory('logos')
                    ->imageAspectRatio('1:1')
                    ->automaticallyResizeImagesToWidth('400')
                    ->automaticallyResizeImagesMode('contain')
                    ->maxSize(2048)
                    ->helperText('💡 Kosongkan jika ingin menggunakan logo default Sakanca Alliance.')
                    ->nullable(),

                FileUpload::make('background_image')
                    ->label('Foto Background About')
                    ->image()
                    ->directory('about')
                    ->imageAspectRatio('16:9')
                    ->automaticallyResizeImagesToWidth('1920')
                    ->automaticallyResizeImagesMode('cover')
                    ->maxSize(5120)
                    ->helperText('⚠️ Maksimal 5 MB (Rasio 16:9). Gambar otomatis di-resize ke resolusi 1080p.')
                    ->required(),
            ]
        );
    }
}
