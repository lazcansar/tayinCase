<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OperationsController;

Route::get('/', [PageController::class, 'index'])->name('home')->middleware('auth');
Route::get('/tayin-talebi-olustur', [PageController::class, 'ticket'])->name('ticket');
Route::post('/tayin-talebi-gonder', [OperationsController::class, 'ticketSend'])->name('ticketSend');
Route::get('/giris-yap', [PageController::class, 'login'])->name('login');
Route::post('/giris-yap', [OperationsController::class, 'loginUser'])->name('login.post');
Route::get('/kullanici-olustur', [OperationsController::class, 'regUser'])->name('register');
Route::get('/kullanici-detay-olustur', [OperationsController::class, 'regUserDetail'])->name('register.detail');
Route::get('/cikis-yap', [OperationsController::class, 'logout'])->name('logout');
Route::get('/sehir-olustur', [OperationsController::class, 'insertCity'])->name('city-generate');
