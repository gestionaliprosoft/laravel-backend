<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BreweryResource\Api\Transformers\BreweryTransformer;
use App\Filament\Resources\BreweryResource\Pages;
use App\Models\Brewery;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BreweryResource extends Resource
{
    protected static ?string $model = Brewery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->wrap()
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('brewery_type')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('address_1')
                    ->description(function (Brewery $record) {
                        view('columns.addresses', [
                            'record' => $record,
                        ]);
                    })
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('city')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('state_province')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('postal_code')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('latitude')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('longitude')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('website_url')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('state')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
                TextColumn::make('street')
                    ->searchable()
                    ->sortable()
                    ->alignLeft(),
            ])
            ->filters([
                SelectFilter::make('name')
                    ->multiple()
                    ->options(Brewery::select('name')
                        ->distinct()
                        ->get()
                        ->pluck('name', 'name')
                    ),
                SelectFilter::make('brewery_type')
                    ->multiple()
                    ->options(Brewery::select('brewery_type')
                            ->distinct()
                            ->get()
                            ->pluck('brewery_type', 'brewery_type')
                    ),
            ])
            ->actions([])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBreweries::route('/'),
        ];
    }

    public static function getApiTransformer()
    {
        return BreweryTransformer::class;
    }
}
