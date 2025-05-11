<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', [homeController::class, 'index']);

Route::get('/', function () {
    return view('home');
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