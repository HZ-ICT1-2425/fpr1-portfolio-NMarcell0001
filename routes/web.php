<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\PostController;

// Home route
Route::get('/', [IndexController::class, 'index'])->name('home');

// Profile route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// FAQ routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create'); // Create FAQ page
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store'); // Store new FAQ
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit'); // Edit FAQ page
Route::put('/faq/{faq}', [FaqController::class, 'update'])->name('faq.update'); // Update FAQ
Route::delete('/faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy'); // Delete FAQ

// Blog route (listing all posts)
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Post route (individual post)
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('post.show');
