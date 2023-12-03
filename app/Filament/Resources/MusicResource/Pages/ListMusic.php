<?php

namespace App\Filament\Resources\MusicResource\Pages;

use App\Filament\Resources\MusicResource;
use App\Filament\Resources\MusicResource\Widgets\MusicCount;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMusic extends ListRecords
{
    protected static string $resource = MusicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            MusicCount::class
        ];
    }
}
