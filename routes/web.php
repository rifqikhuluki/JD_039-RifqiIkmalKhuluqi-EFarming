<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\dataDombaController;
use App\Http\Controllers\tambahDombaController;

use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/data-domba', [dataDombaController::class, 'index'])->name('dataDomba');

Route::get('/data-domba/tambah-domba', [tambahDombaController::class, 'index'])->name('tambahDomba');

Route::post('/data-domba/tambah-domba/insert', [tambahDombaController::class, 'insert'])->name('tambahDomba.insert');
