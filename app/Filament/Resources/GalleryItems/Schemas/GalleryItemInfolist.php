<?php

namespace App\Filament\Resources\GalleryItems\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Judul & Subjudul')
                    ->schema([
                        TextEntry::make('title.ID')->label('Judul (ID)'),
                        TextEntry::make('subtitle.ID')->label('Subjudul (ID)'),
                        TextEntry::make('text_kicker.ID')->label('Kicker (ID)'),

                        TextEntry::make('title.EN')->label('Title (EN)'),
                        TextEntry::make('subtitle.EN')->label('Subtitle (EN)'),
                        TextEntry::make('text_kicker.EN')->label('Kicker (EN)'),

                        TextEntry::make('title.JPN')->label('タイトル (JPN)'),
                        TextEntry::make('subtitle.JPN')->label('サブタイトル (JPN)'),
                        TextEntry::make('text_kicker.JPN')->label('キッカー (JPN)'),
                    ])
                    ->columns(3),

                RepeatableEntry::make('images')
                    ->label('Daftar Gambar Slideshow')
                    ->schema([
                        ImageEntry::make('src')->label('File Gambar'),
                        TextEntry::make('alt')->label('Alt Deskripsi'),
                        TextEntry::make('zoomType')->label('Tipe Zoom'),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),

                IconEntry::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),
            ]);
    }
}
