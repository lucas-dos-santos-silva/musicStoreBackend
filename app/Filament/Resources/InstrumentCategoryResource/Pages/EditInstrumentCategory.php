<?php

namespace App\Filament\Resources\InstrumentCategoryResource\Pages;

use App\Filament\Resources\InstrumentCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstrumentCategory extends EditRecord
{
    protected static string $resource = InstrumentCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
