<?php

namespace App\Filament\Resources\AudioResource\Pages;

use App\Filament\Resources\AudioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAudio extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AudioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
