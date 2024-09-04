<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    //Generate 3 unique random tags
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Post::factory(6)->hasAttached($tags)->create(new Sequence(
            [
                'featured' => false
            ],
            [
                'featured' => true
            ]
        ));
    }
}
