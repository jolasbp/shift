<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'avatar' => fake()->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
}
