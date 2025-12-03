<?php
namespace App\Filament\Resources\BreweryResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\BreweryResource;


class BreweryApiService extends ApiService
{
    protected static string | null $resource = BreweryResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];
    }
}
