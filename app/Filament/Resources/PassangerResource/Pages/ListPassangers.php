<?php

namespace App\Filament\Resources\PassangerResource\Pages;

use App\Filament\Resources\PassangerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPassangers extends ListRecords
{
    protected static string $resource = PassangerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
