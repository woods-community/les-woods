<?php

namespace App\Filament\Resources\AudioResource\Pages;

use App\Filament\Resources\AudioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAudio extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AudioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
