<?php

namespace App\Filament\Resources\BreweryResource\Api;

use App\Filament\Resources\BreweryResource;
use Rupadana\ApiService\ApiService;

class BreweryApiService extends ApiService
{
    protected static ?string $resource = BreweryResource::class;

    public static function handlers(): array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class,
        ];
    }
}
