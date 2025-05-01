<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news', [
        'title' => 'Latest News'
    ]);
})->name('news');

Route::get('/about', function () {
    return view('about');
})->name('about');