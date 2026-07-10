<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Struktur Heading')
                    ->schema([
                        TextEntry::make('title1')->label('Heading 1'),
                        TextEntry::make('title2')->label('Heading 2'),
                        TextEntry::make('logo')->label('Logo')->placeholder('-'),
                    ])
                    ->columns(3),

                Section::make('Blok Deskripsi Terjemahan')
                    ->schema([
                        TextEntry::make('description.ID')->label('Versi Indonesia (ID)')->columnSpanFull(),
                        TextEntry::make('description.EN')->label('Versi Inggris (EN)')->columnSpanFull(),
                        TextEntry::make('description.JPN')->label('Versi Jepang (JPN)')->columnSpanFull(),
                    ]),

                Section::make('Aset Gambar')
                    ->schema([
                        ImageEntry::make('background_image')->label('Foto Tim'),
                    ]),
            ]);
    }
}
