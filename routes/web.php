<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\BookfrondController;
use App\Http\Controllers\ContactfrondController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialBookController;
use App\Http\Controllers\StorefrondController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route untuk user
Route::middleware(['auth', 'userMiddleware'])->group(function () {
    // rooute untuk user
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

// Route untuk admin
Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    // Route Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route Manajemen Admin
    Route::resource('manajemen', ManajemenController::class);
    // Route untuk ke user yang login
    Route::get('/userlogin', [UserLoginController::class, 'index'])->name('userlogin');
});

// Route Untuk special book
Route::get('specialbook', [SpecialBookController::class, 'index'])->name('specialbook')->middleware('auth');

// route untuk baca
Route::get('/Baca/{id}', [BacaController::class, 'index'])->name('baca')->middleware('auth');

// Route untuk bagian depan
Route::get('/book', [BookfrondController::class, 'index'])->name('bookfrond');
Route::get('/contact', [ContactfrondController::class, 'index'])->name('contactfrond');
Route::get('/store', [StorefrondController::class, 'index'])->name('storefrond');
