<?php

namespace App\Filament\Resources\GalleryItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class GalleryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Judul & Subjudul')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('title.ID')->label('Judul (ID)')->required(),
                                TextInput::make('subtitle.ID')->label('Subjudul (ID)')->required(),
                                TextInput::make('text_kicker.ID')->label('Kicker (ID)')->required(),
                            ]),
                        Tab::make('English')
                            ->schema([
                                TextInput::make('title.EN')->label('Title (EN)')->required(),
                                TextInput::make('subtitle.EN')->label('Subtitle (EN)')->required(),
                                TextInput::make('text_kicker.EN')->label('Kicker (EN)')->required(),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                TextInput::make('title.JPN')->label('タイトル (JPN)')->required(),
                                TextInput::make('subtitle.JPN')->label('サブタイトル (JPN)')->required(),
                                TextInput::make('text_kicker.JPN')->label('キッカー (JPN)')->required(),
                            ]),
                    ])
                    ->columnSpanFull(),

                Repeater::make('images')
                    ->label('Images Slideshow')
                    ->schema([
                        FileUpload::make('src')
                            ->label('Gambar')
                            ->image()
                            ->directory('gallery')
                            ->imageAspectRatio('16:9')
                            ->automaticallyResizeImagesToWidth('1200')
                            ->automaticallyResizeImagesMode('cover')
                            ->maxSize(5120)
                            ->helperText('⚠️ Maksimal 5 MB per foto (Rasio 16:9).')
                            ->required(),
                        TextInput::make('alt')
                            ->label('Alt Text (deskripsi gambar)')
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
                    ->minItems(1)
                    ->columns(2)
                    ->reorderable()
                    ->collapsible()
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
