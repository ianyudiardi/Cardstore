<?php

namespace App\Filament\Resources\Cards\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CardsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('set')
                    ->searchable(),
                TextColumn::make('attribute_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('monster_type_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('frame_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('spell_type_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('trap_type_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('level')
                    ->searchable(),
                TextColumn::make('rank')
                    ->searchable(),
                TextColumn::make('link_rating')
                    ->searchable(),
                TextColumn::make('pendulum_scale')
                    ->searchable(),
                TextColumn::make('atk')
                    ->searchable(),
                TextColumn::make('def')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('rarity')
                    ->searchable(),
                TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
