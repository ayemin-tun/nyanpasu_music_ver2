<?php

namespace App\Filament\Resources\RequestMusicResource\Pages;

use App\Filament\Resources\RequestMusicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestMusic extends ListRecords
{
    protected static string $resource = RequestMusicResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
