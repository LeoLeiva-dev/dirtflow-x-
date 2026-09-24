<?php

use App\Http\Controllers\BikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::inertia('/', 'public/Home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::get('/bikes', [BikeController::class, 'index'])
    ->name('bikes.index');

Route::get('/bikes/{slug}', [BikeController::class, 'show'])
    ->name('bikes.show');


Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/{productId}', [CartController::class, 'add'])
    ->name('cart.add');





require __DIR__.'/settings.php';
