<?php

namespace App\Filament\Resources\Cards\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                TextInput::make('set')
                    ->required(),
                TextInput::make('attribute_id')
                    ->numeric(),
                TextInput::make('monster_type_id')
                    ->numeric(),
                Select::make('frame_id')
                    ->relationship('frame', 'name')
                    ->required()
                    ->live(),
                TextInput::make('spell_type_id')
                    ->numeric(),
                TextInput::make('trap_type_id')
                    ->numeric(),
                TextInput::make('level'),
                TextInput::make('rank'),
                TextInput::make('link_rating'),
                TextInput::make('pendulum_scale'),
                TextInput::make('atk'),
                TextInput::make('def'),
                TextInput::make('description')
                    ->required(),
                TextInput::make('rarity')
                    ->required(),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
            ]);
    }
}
