<?php

namespace App\Filament\Resources\SowCpuArsipResource\Pages;

use App\Filament\Resources\SowCpuArsipResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Form;

class ViewSowCpuArsip extends ViewRecord
{
    protected static string $resource = SowCpuArsipResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([]);
    }
}