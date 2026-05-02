<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Berita / Artikel Terkini']);
});

Route::get('/trending', function () {
    return view('trending', ['title' => 'On Trending']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "Connect with Us"]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/article/{id}', function ($id) {


    return view('articleDetail', ['title' => '']);
});
