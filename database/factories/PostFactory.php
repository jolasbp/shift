<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'title' => 'Lorem Ipsum',
            'price' => fake()->randomElement(['$50,000', '$100,000']),
            'description' => 'Lorem Ipsum.',
            'manufacturer' => 'Lorem Ipsum.',
            'car_image' => fake()->imageUrl(),
            'featured' => false
        ];
    }
}
