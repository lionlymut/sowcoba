<?php

namespace App\Filament\Resources\SowCpuArsipResource\Pages;

use App\Filament\Resources\SowCpuArsipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSowCpuArsip extends EditRecord
{
    protected static string $resource = SowCpuArsipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
