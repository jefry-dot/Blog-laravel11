<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        
       
        'title' => 'Blog',
        'posts' => [
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
        ]]);
});


Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug'=> 'post-1',
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});