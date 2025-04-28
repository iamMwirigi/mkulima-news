<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $data = [
        'title' => 'Welcome to Ukenya',
        'description' => 'Explore our thoughts, stories, and ideas.',
        'posts' => [
            ['id' => 1, 'title' => 'Post One', 'content' => 'Content for post one.'],
            ['id' => 2, 'title' => 'Post Two', 'content' => 'Content for post two.'],
        ],
    ];

    return view('home', $data);
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        // return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
