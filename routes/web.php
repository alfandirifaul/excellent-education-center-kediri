<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Route::prefix('')->group(function () {
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
});

Route::get('/class', [SystemController::class, 'dashboardClass'])->name('class');
Route::post('/class', [PaymentController::class, 'createCharge'])->name('class.charge');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

