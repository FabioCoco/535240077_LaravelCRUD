<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    echo 'User ID:' . $id;
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    echo "Halaman Mahasiswa";
});