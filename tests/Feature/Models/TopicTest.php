<?php

declare(strict_types=1);

use App\Models\Topic;

it('can be created', function () {
    // Arrange
    Topic::factory()->create();


    // Act & Assert
    expect(Topic::all())->toHaveCount(1);
});

it('can be updated', function () {
    // Arrange
    $topic = Topic::factory()->create();

    // Act
    $topic->update([
        'title' => 'New Title',
    ]);

    // Assert
    expect($topic->title)->toBe('New Title');
});

it('can be deleted', function () {
    // Arrange
    $topic = Topic::factory()->create();

    // Act
    $topic->delete();

    // Assert
    expect(Topic::all())->toHaveCount(0);
});
