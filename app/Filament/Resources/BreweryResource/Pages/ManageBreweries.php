<?php

namespace App\Filament\Resources\BreweryResource\Pages;

use App\Filament\Resources\BreweryResource;
use Filament\Resources\Pages\ManageRecords;

class ManageBreweries extends ManageRecords
{
    protected static string $resource = BreweryResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
