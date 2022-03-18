<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

//PRODOTTI
Route::get('/comics', function () {
    $comics = config('comics_data');
    return view('comics', compact('comics'));
})->name('comics');

//SINGOLO PRODOTTO
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics_data');
    $comic = $comics[$id];
    return view('comic', compact('comic'));
})->name('comic');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/news', function () {
    return view('news');
})->name('news');
