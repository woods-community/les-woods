<?php

namespace App\Filament\Resources\AudioResource\Pages;

use App\Filament\Resources\AudioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAudio extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AudioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
