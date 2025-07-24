<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
     return view('hello');
});

Route::get('/about', function () {
     return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
