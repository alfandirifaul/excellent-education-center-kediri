<?php

use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Models\Kategori;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaDashboardController;
use App\Http\Controllers\SubscriptionTransactionController;
use App\Http\Controllers\TugasController;


Route::prefix('')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('/about', [FrontController::class, 'about'])->name('about');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
    Route::get('/price', [FrontController::class, 'price'])->name('price');
});

Route::get('/class', [SystemController::class, 'dashboardClass'])->name('class');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:guru|owner'])->name('dashboard');


Route::prefix('siswa-dashboard')->name('siswa-dashboard.')->middleware(['auth', 'role:siswa'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])
        ->middleware(['role:siswa'])
        ->name('index');
    Route::get('/settings', [DashboardController::class, 'settings'])
        ->middleware(['role:siswa'])
        ->name('settings');
    Route::put('/settings/{user}', [DashboardController::class, 'settingSiswaUpdate'])
        ->middleware(['role:siswa'])
        ->name('settings.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/subscription', [SubscriptionTransactionController::class, 'index'])->name('subscription.index');
    Route::get('/subscription/{id}', [SubscriptionTransactionController::class, 'show'])->name('subscription.show');
    Route::post('/subscription', [SubscriptionTransactionController::class, 'store'])->name('subscription.store');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('siswa', SiswaController::class)
            ->middleware('role:owner|guru');
        Route::resource('guru', GuruController::class)
            ->middleware('role:owner|guru');
        Route::resource('subscription-transaction', SubscriptionTransactionController::class)
            ->middleware('role:owner|guru');
        Route::resource('kelas', KelasController::class)
            ->middleware('role:owner|guru');
        Route::resource('materi', MateriController::class)
            ->middleware('role:owner|guru');
        Route::resource('kuis', KuisController::class)
            ->middleware('role:owner|guru');
        Route::resource('tugas', TugasController::class)
            ->middleware('role:owner|guru');
        Route::resource('nilai', NilaiController::class)
            ->middleware('role:owner|guru');
        Route::resource('bank-soal', BankSoalController::class)
            ->middleware('role:owner|guru');
        Route::resource('kategori', KategoriController::class)
            ->middleware('role:owner|guru');
        Route::resource('pricing', PricingController::class)
            ->middleware('role:owner|guru');

        // START Kategori
        Route::get('/kategori/create', [KategoriController::class, 'create'])
            ->name('kategori.create');
        Route::post('/kategori/create', [KategoriController::class, 'store'])
            ->name('kategori.store');
        Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])
            ->name('kategori.edit');
        Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])
            ->name('kategori.update');
        Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])
            ->name('kategori.delete');
        // END Kategori

        // // START Kelas
        // Route::get('/kelas/{kelas}/edit', [KelasController::class, 'edit'])
        //     ->name('kelas.edit');
        // Route::put('/kelas/{kelas}', [KelasController::class, 'update'])
        //     ->name('kelas.update');
        // Route::get('/kelas/{kelas}/show', [KelasController::class, 'show'])
        //     ->name('kelas.show');

    });
});

require __DIR__.'/auth.php';

