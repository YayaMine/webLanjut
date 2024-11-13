<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    $nama = env('NAMA', 'Default Name');
    return view('about', ['nama' => $nama, 'title' => 'About Page']);
});

// wildcard
Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1-dari-route',
            'title' => 'Judul Artikel 1 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2-dari-route',
            'title' => 'Judul Artikel 2 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', ['title' => 'singel post', 'post' => $post]);
});

Route::get('/blogs', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1-dari-route',
            'title' => 'Judul Artikel 1 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2-dari-route',
            'title' => 'Judul Artikel 2 dari route',
            'author' => 'Lea Alyu',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur, perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam fugiat esse nemo. Quam!',
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
