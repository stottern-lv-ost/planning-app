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
                        ->label('Created at')
                        ->content(fn (Model $record): ?string => $record->created_at?->diffForHumans()),

                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (Model $record): ?string => $record->updated_at?->diffForHumans()),
                ])
                ->columnSpan(['lg' => 1])
                ->hidden(fn (?Model $record) => $record === null),
        ];
    }
}
