<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

       

        // Category::create([
        //     "name"=> "Laravel",
        //     "slug"=> "Laravel",
        // ]);

        // Post::create([
        //     'title' => 'My First Post',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'My First Post',
        //     'body' => "Teknologi terus berkembang dengan pesat, membawa perubahan besar dalam cara kita bekerja dan berkomunikasi. Dalam dekade terakhir, kecerdasan buatan dan pembelajaran mesin telah membuka pintu untuk inovasi baru di berbagai bidang, termasuk kesehatan, pendidikan, dan transportasi.",
        //     ]);

        $this->call([CategorySeeder::class, Userseeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();


    }
}
