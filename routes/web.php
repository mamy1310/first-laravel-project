<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
