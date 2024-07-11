<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;


Route::prefix('postnik')->group(function () {
    Route::get('/', [index::class, 'index'])->name('postnik.index');
});
