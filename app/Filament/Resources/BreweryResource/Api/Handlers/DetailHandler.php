<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\BreweryResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
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
    public function handler(Request $request)
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
