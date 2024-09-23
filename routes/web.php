<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about',['title'=>'About Page']);
});

Route::get('/blog', function () {
    return view('blog',['title'=>'Blog Page', 'posts'=>Post::filter(request(['search','category','author']))->latest()->paginate(3)->withQueryString()]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/blog?author={user:username}', function (User $user) {
    return view('blog', ['title' =>count($user->posts). ' Articles by '.$user->name, 'posts' => $user->posts]);
});

Route::get('/created_at/{post:created_at}', function (Post $post) {
    return view('blog', ['title' =>count($post->all()). ' Articles Created At '.$post->created_at->format('j F Y'), 'posts' => $post->all()]);
});

Route::get('/post?category={category:slug}', function (Category $category) {
    return view('blog', ['title' =>count($category->posts). ' Articles with Categories '.$category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'Contact Page']);
});