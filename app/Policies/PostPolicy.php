<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    //Users can only edit their own post
    public function edit(User $user, Post $post): bool
    {
        return $post->author->user->is($user);
    }

    //Users can only delete their own post
    public function delete(User $user, Post $post): bool
    {
        return $post->author->user->is($user);
    }
}
