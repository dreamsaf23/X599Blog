<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Anang Fatur Rohman',
            'username' => 'anangfatur',
            'email' => 'anangfr2310@gmail.com',
            'password' => bcrypt('tes123')
        ]);

        User::factory(3)->create();
        

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
        
        Category::create([
            "name" => "Gaming",
            "slug" => "gaming"
        ]);
        
        Category::create([
            "name" => "Music",
            "slug" => "music"
        ]);
        

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
