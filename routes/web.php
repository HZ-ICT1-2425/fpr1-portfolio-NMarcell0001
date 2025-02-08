<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\FirstFeedbackController;
use App\Http\Controllers\ICTArticleController;
use App\Http\Controllers\SWOTController;
use App\Http\Controllers\ProgExpController;
use App\Http\Controllers\StudyChoiceController;

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

//FirstFeedback route
Route::get('/blogs/firstfeedback', [FirstFeedbackController::class, 'index'])->name('firstfeedback');

//ICTArticle route
Route::get('/blogs/ictarticle', [ICTArticleController::class, 'index'])->name('ictarticle');

//SWOT route
Route::get('/blogs/swot', [SWOTController::class, 'index'])->name('swot');

//ProgExp route
Route::get('/blogs/progexp', [ProgExpController::class, 'index'])->name('progexp');

//StudyChoice route
Route::get('/blogs/studychoice', [StudyChoiceController::class, 'index'])->name('studychoice');
