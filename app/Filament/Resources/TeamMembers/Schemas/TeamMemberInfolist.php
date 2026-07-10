<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Inti')
                    ->schema([
                        TextEntry::make('name')->label('Nama Utama'),
                        TextEntry::make('surname')->label('Nama Belakang')->placeholder('-'),
                        TextEntry::make('username')->label('Frontend ID Slug'),
                        TextEntry::make('tools')->label('Tools Murni')->placeholder('-'),
                        TextEntry::make('order')->label('No Urut Tampilan'),
                        IconEntry::make('is_active')->label('Status Aktif')->boolean(),
                    ])
                    ->columns(3),

                Section::make('Data Terjemahan (Role & Deskripsi)')
                    ->schema([
                        TextEntry::make('role.ID')->label('Role (ID)'),
                        TextEntry::make('role.EN')->label('Role (EN)'),
                        TextEntry::make('role.JPN')->label('Role (JPN)'),

                        TextEntry::make('description1.ID')->label('Desc Paragraf 1 (ID)')->columnSpanFull(),
                        TextEntry::make('description1.EN')->label('Desc Paragraf 1 (EN)')->columnSpanFull(),
                        TextEntry::make('description1.JPN')->label('Desc Paragraf 1 (JPN)')->columnSpanFull(),

                        TextEntry::make('description2.ID')->label('Desc Paragraf 2 (ID)')->columnSpanFull(),
                        TextEntry::make('description2.EN')->label('Desc Paragraf 2 (EN)')->columnSpanFull(),
                        TextEntry::make('description2.JPN')->label('Desc Paragraf 2 (JPN)')->columnSpanFull(),
                    ])
                    ->columns(3),

                Section::make('Array Teknis (JSON List)')
                    ->schema([
                        TextEntry::make('skills')->label('Daftar Keahlian/Skills (JSON Array)')->badge()->placeholder('-'),
                        TextEntry::make('focus')->label('Fokus Bidang (JSON Array)')->badge()->placeholder('-'),
                        TextEntry::make('style')->label('Gaya Kerja (JSON Array)')->badge()->placeholder('-'),
                    ])
                    ->columns(3),

                Section::make('Media & Sosial Kontak')
                    ->schema([
                        ImageEntry::make('photo')->label('Foto Profil')->circular(),
                        ImageEntry::make('background_image')->label('Background Slide'),
                        TextEntry::make('instagram_url')->label('Instagram')->placeholder('-'),
                        TextEntry::make('github_url')->label('GitHub')->placeholder('-'),
                        TextEntry::make('linkedin_url')->label('LinkedIn')->placeholder('-'),
                        TextEntry::make('email')->label('Email')->placeholder('-'),
                    ])
                    ->columns(3),
            ]);
    }
}
