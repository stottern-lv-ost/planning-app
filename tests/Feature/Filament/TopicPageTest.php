<?php

declare(strict_types=1);

use App\Filament\Resources\TopicResource;
use App\Models\Topic;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

beforeEach(function () {
    $this->user = User::factory()->create();

    actingAs($this->user);
});

it('can render page', function () {
    // Act & Assert
    get(TopicResource::getUrl('index'))
        ->assertSuccessful();
});

it('can list topics', function () {
    // Arrange
    $topics = Topic::factory()->count(3)->create();

    // Act & Assert
    livewire(TopicResource\Pages\ListTopics::class)
        ->assertSee($topics);
})->skip("todo: fix livewire test");

it('can create a topic', function () {
    // Arrange
    $topic = Topic::factory()->make();

    // Act & Assert
    livewire(TopicResource\Pages\CreateTopic::class)
        ->fillForm([
            'title' => $topic->title,
            'slug' => $topic->slug,
            'description' => $topic->description,
        ])
        ->call('create')
        ->assertHasNoErrors()
        ->assertRedirect(TopicResource::getUrl('index'));
})->skip("todo: fix livewire test");
