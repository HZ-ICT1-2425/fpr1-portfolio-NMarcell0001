<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('faq', FaqController::class)->except(['edit', 'update']);
Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('faq/{faq}', [FaqController::class, 'update'])->name('faq.update');

Route::resource('blog', BlogController::class)->except(['edit', 'update', 'show']);
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog/{slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog/{slug}', [BlogController::class, 'update'])->name('blog.update');
