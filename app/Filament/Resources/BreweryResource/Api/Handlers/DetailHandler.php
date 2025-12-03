<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use App\Filament\Resources\BreweryResource;
use App\Filament\Resources\BreweryResource\Api\Transformers\BreweryTransformer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = BreweryResource::class;

    /**
     * Show Brewery
     *
     * @return BreweryTransformer
     */
    public function handler(Request $request): BreweryTransformer|JsonResponse
    {
        $id = $request->route('id');

        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (! $query) {
            return static::sendNotFoundResponse();
        }

        return new BreweryTransformer($query);
    }
}
