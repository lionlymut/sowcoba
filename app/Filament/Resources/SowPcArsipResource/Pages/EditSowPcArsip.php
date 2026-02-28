<?php

namespace App\Filament\Resources\SowPcArsipResource\Pages;

use App\Filament\Resources\SowPcArsipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSowPcArsip extends EditRecord
{
    protected static string $resource = SowPcArsipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
