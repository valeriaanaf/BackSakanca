<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Utama Layanan')
                    ->schema([
                        TextEntry::make('name')->label('Nama Layanan / Divisi'),
                        TextEntry::make('slug')->label('Slug URL'),
                        TextEntry::make('logo')->label('Icon Class Template')->placeholder('-'),
                        TextEntry::make('color_theme')->label('Tema Warna').placeholder('-'),
                        TextEntry::make('order')->label('Nomor Urut Tampilan'),
                        IconEntry::make('is_active')->label('Status Aktif')->boolean(),
                    ])
                    ->columns(3),

                Section::make('Konten Deskripsi Terjemahan')
                    ->schema([
                        TextEntry::make('description.ID')->label('Deskripsi (Bahasa Indonesia)')->columnSpanFull(),
                        TextEntry::make('description.EN')->label('Description (English)')->columnSpanFull(),
                        TextEntry::make('description.JPN')->label('説明 (日本語)')->columnSpanFull(),
                    ]),

                Section::make('Banner Penunjang (Detailed View)')
                    ->schema([
                        ImageEntry::make('image')->label('Service Banner Image'),
                    ]),
            ]);
    }
}
