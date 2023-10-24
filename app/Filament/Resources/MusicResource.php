<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MusicResource\Pages;
use App\Filament\Resources\MusicResource\RelationManagers;
use App\Models\Music;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup as ActionsActionGroup;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MusicResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Music::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';
    protected static ?string $recordTitleAttribute = 'name';
    protected static int $globalSearchResultsLimit = 5;
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'interact_with_other_create'
        ];
    }
    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Artist' => $record->artist
        ];
    }
    protected static ?string $navigationGroup = "Muisc";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        FileUpload::make('image')
                            ->imageEditor()
                            ->required(),
                        Textarea::make('description')
                            ->rows(10)
                            ->cols(10),
                    ]),
                Group::make()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('artist')
                            ->required(),
                        TextInput::make('movie_name'),
                        Textarea::make('download_link')
                            ->required(),
                        Textarea::make('iframe_link')
                            ->required(),
                        Hidden::make('user_id')
                            ->default(Auth()->user()->id)
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                BadgeColumn::make('user.name')
                    ->label('created_user')
                    ->color(static function ($state): string {
                        if ($state === Auth()->user()->name) {
                            return 'primary';
                        }

                        return 'danger';
                    }),
                TextColumn::make('artist')
                    ->searchable()
                    ->sortable()
                    ->words(5),
                TextColumn::make('movie_name')
                    ->searchable()
                    ->sortable()
                    ->words(5),

            ])
            ->filters([
                //
            ])
            ->actions([
                ActionsActionGroup::make([
                    Tables\Actions\EditAction::make()
                        ->color('info'),
                    Tables\Actions\DeleteAction::make()
                        ->visible(function (Music $record) {
                            // Check if the authenticated user is a super admin or the record user_id matches the authenticated user's ID.
                            return auth()->user()->hasRole('super_admin') || auth()->user()->can('interact_with_other_create_music') || auth()->id() === $record->user_id;
                        }),
                    Tables\Actions\ViewAction::make()
                        ->color('success'),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
            ])->defaultSort('id', 'desc');
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
            'index' => Pages\ListMusic::route('/'),
            'create' => Pages\CreateMusic::route('/create'),
            'edit' => Pages\EditMusic::route('/{record}/edit'),
        ];
    }
}
