<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Situs')
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Nama Situs')
                            ->required()
                            ->maxLength(100),

                        FileUpload::make('site_logo')
                            ->label('Logo Situs')
                            ->image()
                            ->directory('settings/logo')
                            ->imageAspectRatio('1:1')
                            ->automaticallyResizeImagesToWidth('400')
                            ->automaticallyResizeImagesMode('contain')
                            ->maxSize(2048)
                            ->helperText('💡 Maksimal 2 MB (Format PNG / WebP transparan).'),

                        TextInput::make('footer_copyright')
                            ->label('Teks Copyright Footer')
                            ->placeholder('© Sakanca Alliance 2026')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Kontak & Sosial Media')
                    ->schema([
                        TextInput::make('contact_email')->label('Email Kontak')->email(),
                        TextInput::make('contact_phone')->label('Nomor Telepon'),
                        TextInput::make('social_instagram')->label('Link Instagram')->url(),
                        TextInput::make('social_tiktok')->label('Link TikTok')->url(),
                        TextInput::make('social_linkedin')->label('Link LinkedIn')->url(),
                    ])
                    ->columns(2),

                Section::make('Background Dekoratif per Section')
                    ->schema([
                        FileUpload::make('services_section_bg')
                            ->label('Background Section Services')
                            ->image()
                            ->directory('settings-backgrounds')
                            ->imageAspectRatio('16:9')
                            ->automaticallyResizeImagesToWidth('1920')
                            ->automaticallyResizeImagesMode('cover')
                            ->maxSize(5120)
                            ->helperText('⚠️ Ukuran file maksimal 5 MB (Rasio 16:9). Sistem akan otomatis me-resize foto ke resolusi optimal 1080p.'),
                        
                        FileUpload::make('projects_section_bg')
                            ->label('Background Section Projects')
                            ->image()
                            ->directory('settings/backgrounds')
                            ->imageAspectRatio('16:9')
                            ->automaticallyResizeImagesToWidth('1920')
                            ->automaticallyResizeImagesMode('cover')
                            ->maxSize(5120)
                            ->helperText('⚠️ Ukuran file maksimal 5 MB (Rasio 16:9). Sistem akan otomatis me-resize foto ke resolusi optimal 1080p.'),
                        
                        FileUpload::make('testimonials_section_bg')
                            ->label('Background Section Testimonials')
                            ->image()
                            ->directory('settings/backgrounds')
                            ->imageAspectRatio('16:9')
                            ->automaticallyResizeImagesToWidth('1920')
                            ->automaticallyResizeImagesMode('cover')
                            ->maxSize(5120)
                            ->helperText('⚠️ Ukuran file maksimal 5 MB (Rasio 16:9). Sistem akan otomatis me-resize foto ke resolusi optimal 1080p.'),
                    ])
                    ->columns(3),
            ]);
    }
}