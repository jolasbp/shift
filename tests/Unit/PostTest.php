<?php

use App\Models\Author;
use App\Models\Post;

it('belongs to an author', function () {
    //Arrange
    $author = Author::factory()->create();
    $post = Post::factory()->create([
        'author_id' => $author->id,
    ]);

    //Act & Assert
    expect($post->author->is($author))->toBeTrue();
});

it('can have tags', function () {
    //Arrange
    $post = Post::factory()->create();

    //Act
    $post->tag('Honda');

    //Assert
    expect($post->tags)->toHaveCount(1);


});
