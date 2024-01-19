<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ContactController;

// Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

// About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Us Route
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

/// routes/web.php

use App\Http\Controllers\Auth\NewRegisteredUserController;

Route::get('/register', [NewRegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [NewRegisteredUserController::class, 'register']);


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Socialite (Facebook) Routes
Route::get('/auth/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

// Socialite (Twitter) Routes
Route::get('/auth/twitter', [LoginController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('/auth/twitter/callback', [LoginController::class, 'handleTwitterCallback']);

// Socialite (Google) Routes
Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Contact Controller Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
