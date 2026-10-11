<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

// Tambahkan route /home di sini
Route::get('/home', function () {
    return 'Selamat Pagi Dunia, [707082400059]';
});