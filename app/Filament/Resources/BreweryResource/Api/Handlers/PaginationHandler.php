<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use App\Filament\Resources\BreweryResource;
use App\Filament\Resources\BreweryResource\Api\Transformers\BreweryTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class PaginationHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = BreweryResource::class;

    public static bool $public = false;

    /**
     * List of Brewery
     *
     * @param  Request  $request
     */
    public function handler(): AnonymousResourceCollection
    {
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for($query)
            ->allowedFields($this->getAllowedFields() ?? [])
            ->allowedSorts($this->getAllowedSorts() ?? [])
            ->allowedFilters($this->getAllowedFilters() ?? [])
            ->allowedIncludes($this->getAllowedIncludes() ?? [])
            ->paginate(request()->query('per_page'))
            ->appends(request()->query());

        return BreweryTransformer::collection($query);
    }
}
