<?php

namespace App\Filament\Resources\InstrumentCategoryResource\Pages;

use App\Filament\Resources\InstrumentCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInstrumentCategory extends CreateRecord
{
    protected static string $resource = InstrumentCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
