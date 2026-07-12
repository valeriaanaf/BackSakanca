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
                TextInput::make('title')
                    ->label('Nama Layanan (Statis)')
                    ->required()
                    ->maxLength(100)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => 
                        $operation === 'create' ? $set('slug', Str::slug($state)) : null
                    ),

                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                FileUpload::make('image')
                    ->label('Logo Kotak Layanan (Grid)')
                    ->image()
                    ->directory('service-logos'),

                TextInput::make('color')
                    ->label('Gradient Color Fallback')
                    ->placeholder('from-amber-400 to-orange-500'),

                Select::make('col')
                    ->label('Posisi Kolom Grid')
                    ->options([
                        'left' => 'Kiri (Left)',
                        'right' => 'Kanan (Right)',
                    ])->required(),

                TextInput::make('order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}