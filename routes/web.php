<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
<<<<<<< HEAD
=======
Route::get('/', ['App\Http\Controllers\SearchController', 'index'])->name('home');
Route::get('/search', ['App\Http\Controllers\SearchController', 'search'])->name('search');
Route::get('/test', ['App\Http\Controllers\SearchController', 'search'])->name('search');
>>>>>>> 6cf553d715abc6e506d76243e6b95422597789d0

Route::get('/', [SearchController::class, 'index'])->name('home');
Route::post('/search', [SearchController::class, 'searche'])->name('search');
>>>>>>> b7621ebeafd9651a3c8d1c887903d5da2398c87e
