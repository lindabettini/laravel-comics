<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

//PRODOTTI
Route::get('/products', function () {
    $comics = config('comics_data');
    return view('products', compact('comics'));
})->name('products');

//SINGOLO PRODOTTO
Route::get('/product', function () {
    $comics = config('comics_data');
    return view('product', compact('comics'));
})->name('product');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/news', function () {
    return view('news');
})->name('news');
