<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create()

        Category::create([
            "name"=> "Laravel",
            "slug"=> "laravel",
            "color"=> "red",
        ]);

        Category::create([
            "name"=> "PHP",
            "slug"=> "php",
            "color"=> "blue",
        ]);

        Category::create([
            "name"=> "JavaScript",
            "slug"=> "javascript",
            "color"=> "yellow",
        ]);

        Category::create([  
            "name"=> "React JS",
            "slug"=> "react-js",
            "color"=> "green",
        ]);
        
    }
}
