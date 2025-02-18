<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

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

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); // Show all blogs
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create'); // Create new blog page
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store'); // Store new blog
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // Show individual blog
Route::get('/blog/{slug}/edit', [BlogController::class, 'edit'])->name('blog.edit'); // Edit blog page
Route::put('/blog/{slug}', [BlogController::class, 'update'])->name('blog.update'); // Update blog
Route::delete('/blog/{slug}', [BlogController::class, 'destroy'])->name('blog.destroy'); // Delete blog

