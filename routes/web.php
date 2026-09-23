<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BikeController;


Route::inertia('/', 'public/Home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});



Route::get('/bikes', [BikeController::class, 'index'])
    ->name('bikes.index');

Route::get('/bikes/{slug}', [BikeController::class, 'show'])
    ->name('bikes.show');

require __DIR__.'/settings.php';

