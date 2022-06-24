<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StatiaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('home');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.create');
    Route::post('/register/submit', [RegisterController::class, 'submit'])->name('register.submit');
    Route::get('/login', [RegisterController::class, 'get'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'submit'])->name('login.submit');


});
Route::get('/statia', [StatiaController::class, 'stat'])->name('statia');
Route::post('/statia/submit', [StatiaController::class, 'submit'])->name('statia.submit');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::prefix('site')->group(function () {
    Route::get('/kto', [SiteController::class, 'show'])->name('siteKto');
    Route::get('/me', [SiteController::class, 'site_me'])->name('siteME');
});

Route::prefix('posts')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
});

