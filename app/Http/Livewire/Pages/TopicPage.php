<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages;

use App\Models\Topic;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;

class TopicPage extends Component implements HasTable
{
    use InteractsWithTable;

    protected static ?string $recordTitleAttribute = 'title';

    protected function getTableQuery(): Builder
    {
        return Topic::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\Layout\Stack::make([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(150)
                    ->searchable()
                    ->color('secondary'),
            ]),
        ];
    }

    protected function getTableContentGrid(): ?array
    {
        return [
            'md' => 2,
            'xl' => 3,
            '2xl' => 4,
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('show')
                ->label('Show topic')
                ->url(fn (Topic $record): string => route('pages.topics.show', $record))
                ->icon('heroicon-s-eye'),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            // ...
        ];
    }

    public function render(): View
    {
        return view('livewire.pages.topic-page');
    }
}
