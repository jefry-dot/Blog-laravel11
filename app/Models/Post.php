<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'post-1',
                'title' => 'Post 1',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate nobis ut aspernatur praesentium! Praesentium eveniet error reiciendis tempora id? Eos accusantium nobis voluptas. Culpa illo accusantium nam sint mollitia!',
            ],
            [
                'id'=> '2',
                'slug'=> 'post-2',
                'title' => 'Post 2',
                'author' => 'Jane Smith',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate nobis ut aspernatur praesentium! Praesentium eveniet error reiciendis tempora id? Eos accusantium nobis voluptas. Culpa illo accusantium nam sint mollitia!',
            ],
        ];
    }

    public static function find($slug):array
    {
    
       $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (! $post) {
            abort(404);
        }

        return $post;
    }
    
}

