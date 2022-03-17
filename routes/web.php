<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('comics');
})->name('comics');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/news', function () {
    return view('news');
})->name('news');
