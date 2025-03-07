<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
})->name('home');

Route::get('/contact', function () {
    return view('landing-page.contact');
})->name('contact');

Route::get('/price', function () {
    return view('landing-page.price');
})->name('price');

Route::get('/about', function () {
    return view('landing-page.about');
})->name('about');
