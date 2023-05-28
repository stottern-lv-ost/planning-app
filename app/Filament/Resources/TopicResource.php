<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Topic;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Utils\FormUtils;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TopicResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TopicResource extends Resource
{
    protected static ?string $model = Topic::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $slug = 'program/topics';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema(static::getForm())
                    ->columnSpan(2),
                Forms\Components\Group::make()
                    ->schema([
                        ...FormUtils::getModelDates(),
                    ]),

            ])->columns(3);
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('filament.navigation.groups.program');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(static::getTable())
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'view' => Pages\ViewTopic::route('/{record}'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getTable(): array
    {
        return [
            Tables\Columns\TextColumn::make('title')
                ->label(_('filament.pages.topics.title'))
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('slug')
                ->label(_('filament.pages.topics.slug'))
                ->color('secondary')
                ->toggleable(),

            Tables\Columns\TextColumn::make('description')
                ->label(_('filament.pages.topics.description'))
                ->limit(50)
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true)
                ->sortable(),
        ];
    }

    public static function getForm(): array
    {
        return [

            Forms\Components\Card::make()
                ->schema(
                    [
                        Forms\Components\TextInput::make('title')
                            ->label(__('filament.pages.topics.title'))
                            ->autofocus()
                            ->required()
                            ->placeholder(__('filament.pages.topics.title'))
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label(__('filament.pages.topics.slug'))
                            ->autofocus()
                            ->placeholder('Slug'),

                        Forms\Components\RichEditor::make('description')
                            ->label(__('filament.pages.topics.description'))
                            ->disableToolbarButtons([
                                'attachFiles',
                                'codeBlock',
                            ])
                            ->columnSpan('full'),
                    ]
                )->columns(2),
        ];
    }
}
