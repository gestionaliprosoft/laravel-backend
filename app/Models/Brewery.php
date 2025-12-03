<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class Brewery extends Model
{
    use Sushi;

    /**
     * Model Rows
     *
     * @return void
     */
    public function getRows(): array
    {
        // API
        $breweries = Http::get('https://api.openbrewerydb.org/v1/breweries')->json();

        // filtering some attributes
        $breweries = Arr::map($breweries, function ($item): array {
            return Arr::only($item,
                [
                    'id',
                    'name',
                    'brewery_type',
                    'address_1',
                    'address_2',
                    'address_3',
                    'city',
                    'state_province',
                    'postal_code',
                    'country',
                    'longitude',
                    'latitude',
                    'phone',
                    'website_url',
                    'state',
                    'street',
                ]
            );
        });

        return $breweries;
    }
}
