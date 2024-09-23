<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Database\Seeders\UserSeed;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call([CategorySeed::class,UserSeed::class]);
        Post::factory(10)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}