<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use App\Filament\Resources\BreweryResource;
use App\Filament\Resources\BreweryResource\Api\Requests\CreateBreweryRequest;
use Rupadana\ApiService\Http\Handlers;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = BreweryResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Brewery
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateBreweryRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
