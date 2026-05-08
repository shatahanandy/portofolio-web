<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/gallery', 'gallery');

Route::view('/unggah', 'unggah');

Route::view('/statistik', 'statistik');

Route::view('/contact', 'contact');