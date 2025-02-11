<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'indexOnepage']);

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::resource('features', FeatureController::class);
    Route::resource('about', AboutController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('pricing', PricingController::class);
});


