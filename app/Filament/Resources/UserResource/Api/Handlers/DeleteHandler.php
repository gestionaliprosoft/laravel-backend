<?php
namespace App\Filament\Resources\UserResource\Api\Handlers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\UserResource;

class DeleteHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = UserResource::class;

    public static function getMethod(): string
    {
        return Handlers::DELETE;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Delete User
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(Request $request): JsonResponse
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->delete();

        return static::sendSuccessResponse($model, "Successfully Delete Resource");
    }
}
