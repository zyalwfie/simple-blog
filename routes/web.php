<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Ziyad Alwafie',
            'date' => '2 Januari 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
        ],
        [
            'title' => 'Judul Artikel 2',
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
