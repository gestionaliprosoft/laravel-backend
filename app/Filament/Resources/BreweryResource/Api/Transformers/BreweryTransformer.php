<?php
namespace App\Filament\Resources\BreweryResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Brewery;

/**
 * @property Brewery $resource
 */
class BreweryTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
