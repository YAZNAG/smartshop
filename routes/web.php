<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BrandsController;




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/filterByCategory', [HomeController::class, 'filterByCategory'])->name('home.filterByCategory');




Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');

Route::get('/blogs', [BlogsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::get('/brands', [BrandsController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
