<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', ["name" => "Dicky", "title" => "About"]);
});
Route::get('/posts', function () {
    // $posts = Post::filter()->latest();
    return view('posts', ["title" => "Blog", "posts" => Post::filter(request(['search', 'category', 'author']))
        ->latest()->paginate(12)->withQueryString()]);
});
Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ["title" => "Detail Post", 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ["title" => "Articles by " . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('author', 'category');
    return view('posts', ["title" => "Articles in " . $category->name, 'posts' => $category->posts]);
});
