<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Service')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                    ->required(),

                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignoreRecord: true)
                    ->required(),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('service-logos')
                    ->required(),

                Select::make('col')
                    ->label('Posisi Kolom Grid')
                    ->options(['left' => 'Left', 'right' => 'Right'])
                    ->default('left')
                    ->required(),

                TextInput::make('order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}
