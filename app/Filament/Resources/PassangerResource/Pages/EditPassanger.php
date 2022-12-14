<?php

namespace App\Filament\Resources\PassangerResource\Pages;

use App\Filament\Resources\PassangerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPassanger extends EditRecord
{
    protected static string $resource = PassangerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
