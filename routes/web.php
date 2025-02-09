<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\PostController;

// Home route (index page)
Route::get('/', [IndexController::class, 'index'])->name('home');

// Profile route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// FAQ route
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

//Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Blog route
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Blog post route (dynamic slug)
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('post.show');

