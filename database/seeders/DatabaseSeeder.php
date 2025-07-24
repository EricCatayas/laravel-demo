<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'test',
            'email' => 'test@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234567890"),
        ]);

        $categories = [
            'Technology',
            'Health',
            'Lifestyle',
            'Education',
            'Travel',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }

        Post::factory(20)->create();
    }
}
