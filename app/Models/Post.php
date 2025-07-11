<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Ziyad Alwafie',
                'date' => '2 Januari 2025',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Atque, cumque. Quod, asperiores. Doloribus, cumque.',
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
    }

    public static function find($slug)
    {
        // $posts = static::all();
        // return Arr::first($posts, function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $posts = static::all();
        return Arr::first($posts, fn ($post) => $post['slug'] == $slug) ?? abort(404, 'Post not found');
    }
}
