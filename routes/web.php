<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
Route::get('/blog/{post:slug}', function(Post $post) {

    return view('post', ['title' => 'Single Blog', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {

    return view('blog', ['title' => count($user->blogs) . ' Articles By' . $user->name,  'blogs' => $user->blogs]);
});

Route::get('/categories/{category:slug}', function(Category $category) {

    return view('blog', ['title' => count($category->blogs) . ' Articles in' . $category->name,  'blogs' => $category->blogs]);
});

Route::get('/blogs', function () {
    return view('blog', ['title' => 'Blog', 'blogs' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
