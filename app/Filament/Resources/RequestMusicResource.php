<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestMusicResource\Pages;
use App\Filament\Resources\RequestMusicResource\RelationManagers;
use App\Models\RequestMusic;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestMusicResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = RequestMusic::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';
    protected static ?string $navigationGroup = "Muisc";

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'delete',
            'delete_any',
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Group::make()
                            ->schema([
                                TextInput::make('user_name'),
                                TextInput::make('music_name'),
                            ])->columns(2),

                        TextInput::make('anime_name'),
                        RichEditor::make('comment'),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('music_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('anime_name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRequestMusic::route('/'),
            'create' => Pages\CreateRequestMusic::route('/create'),
            // 'edit' => Pages\EditRequestMusic::route('/{record}/edit'),
        ];
    }
}
