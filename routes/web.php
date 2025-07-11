<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Ziyad Alwafie',
            'date' => '2 Januari 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Ziyad Alwafie',
            'date' => '3 Januari 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
        ],
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Ziyad Alwafie',
            'date' => '2 Januari 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Ziyad Alwafie',
            'date' => '3 Januari 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404, 'Post not found');
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
