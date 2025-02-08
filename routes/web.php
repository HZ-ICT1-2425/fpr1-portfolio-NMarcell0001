<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;

// Home route (index page)
Route::get('/', [IndexController::class, 'index'])->name('home');

// Profile route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// FAQ route
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

//Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
