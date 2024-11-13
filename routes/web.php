<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



// semua class harus memiliki namespace agar terbaca
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    $nama = env('NAMA', 'Default Name');
    return view('about', ['nama' => $nama, 'title' => 'About Page']);
});

// wildcard
Route::get('/blog/{slug}', function($slug) {
   
    $blog = Post::find($slug);

    return view('post', ['title' => 'Single Blog', 'post' => $blog]);
});

Route::get('/blogs', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
