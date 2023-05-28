<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages;

use Closure;
use Filament\Tables;
use App\Models\Topic;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Concerns\InteractsWithTable;

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
            // Tables\Columns\Layout\Stack::make([
            //     Tables\Columns\TextColumn::make('title')
            //         ->sortable()
            //         ->searchable()
            //         ->weight('bold'),
            //     Tables\Columns\TextColumn::make('description')
            //         ->limit(150)
            //         ->searchable()
            //         ->color('secondary'),
            // ]),
            Tables\Columns\Layout\View::make('topics.table.row-content')
                ->components([
                    Tables\Columns\TextColumn::make('title')
                        ->searchable()
                        ->weight('bold'),
                ])
        ];
    }

    protected function getTableContentGrid(): ?array
    {
        return [
            'md' => 1,
            'xl' => 2,
            '2xl' => 3,
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            // ...
        ];
    }

    protected function getTableRecordUrlUsing(): ?Closure
    {
        return fn (Topic $record): string => route('pages.topics.show', $record);
    }

    protected function getTableActions(): array
    {
        return [
            // Tables\Actions\Action::make('show')
            //     ->label('Show topic')
            //     ->url(fn (Topic $record): string => route('pages.topics.show', $record))
            //     ->icon('heroicon-s-eye')
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
