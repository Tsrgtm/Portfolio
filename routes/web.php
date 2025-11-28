<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
