<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Article::factory(10)->create();
        // Category::factory(10)->create();
        // Subscriber::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Rammah',
            'email' => 'rammah@test.com',
        ]);
    }
}
