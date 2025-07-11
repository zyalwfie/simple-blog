<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/posts', function () {
    $posts = Post::all();

    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);

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
