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
            'avatar' => 'avatars\ysnfmeIGjV6DOfAq7tjnNDyfGg3BzFgVZGVBOnwv.png',
            'user_id' => User::factory(),
        ];
    }
}
