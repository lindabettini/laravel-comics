<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data = [
        'pages' => [
            'Comics' => 'home',
            'Characters' => 'characters',
            'Games' => 'games',
            'News' => 'news',
        ],
    ];

    return view('home', $data);
})->name('home');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/news', function () {
    return view('news');
})->name('news');
