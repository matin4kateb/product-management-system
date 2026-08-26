<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('contact', [GeneralController::class, 'contact'])->name('contact');
Route::get('about', [GeneralController::class, 'about'])->name('about');
Route::get('faq', [GeneralController::class, 'faq'])->name('faq');

Route::get('login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'store'])->middleware('guest')->name('login.store');
Route::get('register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::resource('products', ProductController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->names('products');
});
