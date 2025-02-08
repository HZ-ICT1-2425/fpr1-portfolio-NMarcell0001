<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

// Home route (index page)
Route::get('/', [IndexController::class, 'index'])->name('home');

// Profile route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
