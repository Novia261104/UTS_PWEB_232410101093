<?php

use App\Http\Controllers\PageController;

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'ProsesLogin'])->name('ProsesLogin');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/', fn() => redirect('/login'));
