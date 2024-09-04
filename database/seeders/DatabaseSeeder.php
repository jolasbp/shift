<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //Create a test user
    public function run(): void
    {
        User::factory()->create([
            'username' => 'test_user',
            'email' => 'test@example.com'
        ]);

        $this->call(PostSeeder::class);
    }
}
