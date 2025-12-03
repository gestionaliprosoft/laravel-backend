<?php

namespace App\Filament\Resources\UserResource\Api\Handlers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Api\Transformers\UserTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = UserResource::class;


    /**
     * Show User
     *
     * @param Request $request
     * @return UserTransformer
     */
    public function handler(Request $request): JsonResponse|UserTransformer
    {
        $id = $request->route('id');

        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new UserTransformer($query);
    }
}
