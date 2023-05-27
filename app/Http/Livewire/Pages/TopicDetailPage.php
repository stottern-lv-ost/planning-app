<?php

declare(strict_types=1);

namespace App\Http\Livewire\Pages;

use App\Models\Topic;
use Livewire\Component;

class TopicDetailPage extends Component
{
    public Topic $topic;

    public function mount(Topic $topic)
    {
        $this->topic = $topic;
    }


    public function render()
    {
        return view('livewire.pages.topic-detail-page', [
            'topic' => $this->topic,
        ]);
    }
}
