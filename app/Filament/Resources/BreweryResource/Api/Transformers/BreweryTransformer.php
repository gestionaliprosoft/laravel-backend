<?php

namespace App\Filament\Resources\BreweryResource\Api\Transformers;

use App\Models\Brewery;
use Illuminate\Http\Resources\Json\JsonResource;

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
