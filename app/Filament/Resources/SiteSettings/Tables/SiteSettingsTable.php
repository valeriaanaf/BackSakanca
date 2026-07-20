<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_name')->label('Nama Situs'),
                TextColumn::make('site_logo')->label('Logo Situs'),
                TextColumn::make('contact_email')->label('Email Kontak'),
                TextColumn::make('updated_at')->label('Terakhir Diubah')->dateTime(),
            ])
            ->recordActions([EditAction::make()]);
    }
}