<?php
namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BreweryResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Filament\Resources\BreweryResource\Api\Transformers\BreweryTransformer;

class PaginationHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = BreweryResource::class;

    public static bool $public = false;

    /**
     * List of {{ model }}
     *
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
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
