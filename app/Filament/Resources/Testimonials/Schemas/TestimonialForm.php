<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_name')
                    ->label('Nama Klien')
                    ->required(),

                Tabs::make('Isi Ulasan')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([Textarea::make('content.ID')
                                ->label('Ulasan (ID)')
                                ->required()]),

                        Tab::make('Inggris')
                            ->schema([Textarea::make('content.EN')
                                ->label('Review (EN)')
                                ->required()]),

                        Tab::make('Jepang')
                            ->schema([Textarea::make('content.JPN')
                                ->label('レビュー (JPN)')
                                ->required()]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5)
                    ->required(),

                TextInput::make('order')->numeric()->default(0),
                Toggle::make('is_active')->default(true),
            ]);
    }
}
