<?php

namespace App\Filament\Resources\BreweryResource\Api\Handlers;

use App\Filament\Resources\BreweryResource;
use App\Filament\Resources\BreweryResource\Api\Requests\UpdateBreweryRequest;
use Rupadana\ApiService\Http\Handlers;

class UpdateHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = BreweryResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Update Brewery
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateBreweryRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (! $model) {
            return static::sendNotFoundResponse();
        }

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Update Resource');
    }
}
