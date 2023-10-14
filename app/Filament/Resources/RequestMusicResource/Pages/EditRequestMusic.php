<?php

namespace App\Filament\Resources\RequestMusicResource\Pages;

use App\Filament\Resources\RequestMusicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestMusic extends EditRecord
{
    protected static string $resource = RequestMusicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
