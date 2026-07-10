<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Heading Utama (Fixed)')
                    ->schema([
                        TextEntry::make('title1')->label('Heading Baris 1'),
                        TextEntry::make('title2')->label('Heading Baris 2'),
                    ])
                    ->columns(2),

                Section::make('Sub-Heading Terjemahan')
                    ->schema([
                        TextEntry::make('subtitle.ID')->label('Subtitle (ID)'),
                        TextEntry::make('subtitle.EN')->label('Subtitle (EN)'),
                        TextEntry::make('subtitle.JPN')->label('Subtitle (JPN)'),
                    ])
                    ->columns(3),

                Group::make()
                    ->schema([
                        TextEntry::make('cta_primary.url')->label('CTA URL Link Target'),
                        TextEntry::make('cta_primary.text.ID')->label('CTA Teks (ID)'),
                        TextEntry::make('cta_primary.text.EN')->label('CTA Teks (EN)'),
                        TextEntry::make('cta_primary.text.JPN')->label('CTA Teks (JPN)'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                RepeatableEntry::make('background_images')
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
