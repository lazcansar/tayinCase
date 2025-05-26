<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OperationsController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/giris-yap', [PageController::class, 'login'])->name('login');
Route::get('/kullanici-olustur', [OperationsController::class, 'regUser'])->name('register');
