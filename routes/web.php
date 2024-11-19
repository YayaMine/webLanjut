<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Heisenberg'], ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'feeds' => [
        [
            'title' => 'Judul Artikel I',
            'author' => 'Yanto',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis sapiente minima quidem quod dicta dignissimos?',

        ],
        [
            'title' => 'Judul Artikel II',
            'author' => 'Yanto',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis sapiente minima quidem quod dicta dignissimos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis sapiente minima quidem quod dicta dignissimos?',

        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
