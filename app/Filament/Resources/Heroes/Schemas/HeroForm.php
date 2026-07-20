<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title1')
                    ->label('Heading Baris 1')
                    ->required()
                    ->maxLength(100),

                TextInput::make('title2')
                    ->label('Heading Baris 2')
                    ->required()
                    ->maxLength(100),

                Tabs::make('Sub-Heading Multi-Bahasa')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('subtitle.ID')->label('Subtitle (ID)')->required(),
                            ]),
                        Tab::make('Inggris')
                            ->schema([
                                TextInput::make('subtitle.EN')->label('Subtitle (EN)')->required(),
                            ]),
                        Tab::make('Jepang')
                            ->schema([
                                TextInput::make('subtitle.JPN')->label('Subtitle (JPN)')->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                Group::make()
                    ->schema([
                        TextInput::make('cta_primary.url')
                            ->label('CTA URL Target')
                            ->required()
                            ->helperText('Contoh: #about atau https://...'),
                        TextInput::make('cta_primary.text.ID')->label('CTA Teks (ID)')->required(),
                        TextInput::make('cta_primary.text.EN')->label('CTA Teks (EN)')->required(),
                        TextInput::make('cta_primary.text.JPN')->label('CTA Teks (JPN)')->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Repeater::make('background_images')
                    ->label('Background Slideshow')
                    ->schema([
                        FileUpload::make('src')
                            ->label('Foto Background')
                            ->image()
                            ->directory('heroes')
                            ->imageAspectRatio('16:9')
                            ->automaticallyResizeImagesToWidth('1920')
                            ->automaticallyResizeImagesMode('cover')
                            ->maxSize(5120)
                            ->helperText('⚠️ Maksimal 5 MB (Rasio 16:9).')
                            ->required(),
                        TextInput::make('alt')
                            ->label('Alt Text Gambar')
                            ->required(),
                        Select::make('zoomType')
                            ->label('Efek Animasi Zoom')
                            ->options([
                                'in' => 'Zoom In',
                                'out' => 'Zoom Out',
                            ])
                            ->default('in')
                            ->required(),
                    ])
                    ->columns(3)
                    ->reorderable()
                    ->collapsible()
                    ->defaultItems(1)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Aktifkan Slide Hero Ini')
                    ->default(true),
            ]);
    }
}
