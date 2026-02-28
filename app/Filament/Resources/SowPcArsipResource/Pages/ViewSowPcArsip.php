<?php

namespace App\Filament\Resources\SowPcArsipResource\Pages;

use App\Filament\Resources\SowPcArsipResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Form;

class ViewSowPcArsip extends ViewRecord
{
    protected static string $resource = SowPcArsipResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([]);
    }
}