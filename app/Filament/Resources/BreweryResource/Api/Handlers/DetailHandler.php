<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BreweryResource;
use App\Filament\Resources\BreweryResource\Api\Transformers\BreweryTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = BreweryResource::class;


    /**
     * Show Brewery
     *
     * @param Request $request
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

        if (!$query) return static::sendNotFoundResponse();

        return new BreweryTransformer($query);
    }
}
