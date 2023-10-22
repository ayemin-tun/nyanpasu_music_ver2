<?php

namespace App\Filament\Resources\MusicResource\Pages;

use App\Filament\Resources\MusicResource;
use App\Models\Music;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMusic extends EditRecord
{
    protected static string $resource = MusicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->visible(function (Music $record) {
                    // Check if the authenticated user is a super admin or the record user_id matches the authenticated user's ID.
                    return auth()->user()->hasRole('super_admin') || auth()->id() === $record->user_id;
                }),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
