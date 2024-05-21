<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/genres', function () {
    return view('genres.index');
});
Route::get('/reviews', function () {
    return view('reviews.index');
});