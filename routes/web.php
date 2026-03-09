<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.details');

Route::fallback(function () {
    return view('errors.not-found');
});