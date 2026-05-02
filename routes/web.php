<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Berita / Artikel Terkini', 'articles' => Article::all()]);
});

Route::get('/trending', function () {
    return view('trending', ['title' => 'On Trending', 'articles' => Article::where('ontrending', 1)->get()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "Connect with Us"]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/article/{id}', function ($id) {

    $article = Article::find($id);

    return view('articleDetail', ['title' => '', 'article' => $article]);
});
