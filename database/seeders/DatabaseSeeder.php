<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Higor Carneiro',
            'slug' => 'higor-carneiro',
            'email' => 'higor@mail.com',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Category::factory(10)->create();
        \App\Models\Post::factory(50)->create();
    }
}
