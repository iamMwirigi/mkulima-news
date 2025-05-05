<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Blog Routes
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index'); // All blogs
    Route::get('/crop-news', [BlogController::class, 'cropNews'])->name('blogs.crop'); // Crop News
    Route::get('/livestock-news', [BlogController::class, 'livestockNews'])->name('blogs.livestock'); // Livestock News
    Route::get('/machinery-news', [BlogController::class, 'machineryNews'])->name('blogs.machinery'); // Machinery News
    Route::get('/market-prices', [BlogController::class, 'marketPrices'])->name('blogs.market'); // Market Prices
    Route::get('/crop-calendar', [BlogController::class, 'cropCalendar'])->name('blogs.calendar'); // Crop Calendar
    Route::get('/govt-schemes', [BlogController::class, 'govtSchemes'])->name('blogs.schemes'); // Govt Schemes
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show'); // Single blog
});