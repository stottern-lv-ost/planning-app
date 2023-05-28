<?php

declare(strict_types=1);

namespace App\Filament\Utils;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;

class FormUtils
{
    public static function getModelDates(): array
    {
        return [
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label(__('filament.general.created_at'))
                        ->content(fn (Model $record): ?string => $record->created_at?->diffForHumans() ?? '-'),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label(__('filament.general.created_at'))
                        ->content(fn (Model $record): ?string => $record->updated_at?->diffForHumans() ?? '-'),

                    Forms\Components\Placeholder::make('deleted_at')
                        ->label(__('filament.general.deleted_at'))
                        ->content(fn (Model $record): ?string => $record->deleted_at?->diffForHumans() ?? '-'),
                ])
                ->columnSpan(['lg' => 1])
                ->hidden(fn (?Model $record) => $record === null),
        ];
    }
}
