<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Depan')
                    ->required()
                    ->maxLength(100),

                TextInput::make('surname')
                    ->label('Nama Belakang')
                    ->maxLength(100),

                Tabs::make('Deskripsi')
                    ->tabs([
                        Tab::make('Indonesia')->schema([
                            TextInput::make('focus.ID')->label('Fokus/Peran (ID)')->required(),
                            Textarea::make('description1.ID')->label('Deskripsi Paragraf 1 (ID)')->rows(3),
                            Textarea::make('description2.ID')->label('Deskripsi Paragraf 2 (ID)')->rows(3),
                        ]),
                        Tab::make('Inggris')->schema([
                            TextInput::make('focus.EN')->label('Focus/Role (EN)')->required(),
                            Textarea::make('description1.EN')->label('Deskripsi Paragraf 1 (EN)')->rows(3),
                            Textarea::make('description2.EN')->label('Deskripsi Paragraf 2 (EN)')->rows(3),
                        ]),
                        Tab::make('Jepang')->schema([
                            TextInput::make('focus.JPN')->label('役割 (JPN)')->required(),
                            Textarea::make('description1.JPN')->label('Deskripsi Paragraf 1 (JPN)')->rows(3),
                            Textarea::make('description2.JPN')->label('Deskripsi Paragraf 2 (JPN)')->rows(3),
                        ]),
                    ])
                    ->columnSpanFull(),

                TagsInput::make('skills')->label('Skills / Tools')->required(),

                TagsInput::make('focus')
                    ->label('Fokus Bidang Kerja')
                    ->placeholder('Tambah fokus...'),

                TextInput::make('tools')
                    ->label('Tools Utama (Format Teks)')
                    ->maxLength(100),

                FileUpload::make('photo')
                    ->label('Foto Profil')
                    ->image()
                    ->directory('team-photos'),

                FileUpload::make('background_image')
                    ->label('Background Banner Slideshow')
                    ->image()
                    ->directory('team-backgrounds'),

                TextInput::make('instagram_url')->label('Instagram URL')->url()->maxLength(255),
                TextInput::make('github_url')->label('GitHub URL')->url()->maxLength(255),
                TextInput::make('linkedin_url')->label('LinkedIn URL')->url()->maxLength(255),
                TextInput::make('email')->label('Alamat Email (Format: valerian@gmail.com)')->maxLength(255),

                TextInput::make('order')
                    ->label('Urutan Tampilan')
                    ->required()
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Status Profil Aktif (Ditampilkan)')
                    ->required()
                    ->default(true),
            ]);
    }
}
