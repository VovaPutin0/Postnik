<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\admin;


Route::prefix('postnik')->group(function () {
    Route::get('/', [index::class, 'index'])->name('postnik.index');
    Route::get('/food', [index::class, 'food'])->name('postnik.food');
});

Route::prefix('postnik/admin')->group(function () {
    Route::get('/', [admin::class, 'index'])->name('admin.index');
    Route::get('/food/creat', [admin::class, 'creat'])->name('admin.creat');
    Route::post('/food', [admin::class, 'store'])->name('admin.store');
});
