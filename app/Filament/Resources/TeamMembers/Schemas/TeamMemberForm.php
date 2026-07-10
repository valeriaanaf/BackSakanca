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
                    ->label('Nama Depan / Utama')
                    ->required()
                    ->maxLength(100),

                TextInput::make('surname')
                    ->label('Nama Belakang / Surname')
                    ->maxLength(100),

                TextInput::make('username')
                    ->label('Frontend Slug / ID (Contoh: tazar, valerian)')
                    ->required()
                    ->maxLength(100),

                Tabs::make('Detail Narasi Multi-Bahasa')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('role.ID')->label('Jabatan (ID)')->required(),
                                Textarea::make('description1.ID')->label('Deskripsi Paragraf 1 (ID)')->rows(3),
                                Textarea::make('description2.ID')->label('Deskripsi Paragraf 2 (ID)')->rows(3),
                            ]),
                        Tab::make('English')
                            ->schema([
                                TextInput::make('role.EN')->label('Role/Position (EN)')->required(),
                                Textarea::make('description1.EN')->label('Description Paragraph 1 (EN)')->rows(3),
                                Textarea::make('description2.EN')->label('Description Paragraph 2 (EN)')->rows(3),
                            ]),
                        Tab::make('日本語')
                            ->schema([
                                TextInput::make('role.JPN')->label('役割/役職 (JPN)')->required(),
                                Textarea::make('description1.JPN')->label('説明パラグラフ 1 (JPN)')->rows(3),
                                Textarea::make('description2.JPN')->label('説明パラグラフ 2 (JPN)')->rows(3),
                            ]),
                    ])
                    ->columnSpanFull(),

                TagsInput::make('skills')
                    ->label('Daftar Skills (Tekan Enter/Koma)')
                    ->placeholder('Tambah skill baru...'),

                TagsInput::make('focus')
                    ->label('Fokus Bidang Kerja')
                    ->placeholder('Tambah fokus...'),

                TextInput::make('tools')
                    ->label('Tools Utama (Format Teks)')
                    ->maxLength(100),

                TagsInput::make('style')
                    ->label('Gaya Kerja / Desain')
                    ->placeholder('Tambah gaya...'),

                FileUpload::make('photo')
                    ->label('Foto Profil (Avatar)')
                    ->image()
                    ->directory('team-photos'),

                FileUpload::make('background_image')
                    ->label('Background Banner Slideshow')
                    ->image()
                    ->directory('team-backgrounds'),

                TextInput::make('instagram_url')->label('Instagram URL')->url()->maxLength(255),
                TextInput::make('github_url')->label('GitHub Profile URL')->url()->maxLength(255),
                TextInput::make('linkedin_url')->label('LinkedIn Profile URL')->url()->maxLength(255),
                TextInput::make('email')->label('Alamat Email (Format: papatazar@gmail.com)')->maxLength(255),

                TextInput::make('order')
                    ->label('Urutan Urutan Tampilan')
                    ->required()
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->required()
                    ->default(true),
            ]);
    }
}
