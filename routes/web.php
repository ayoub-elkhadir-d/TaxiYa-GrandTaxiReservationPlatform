<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/', [SearchController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'showCities'])->name('search');
Route::post('/search', [SearchController::class, 'searche']);

Route::get('/confirm', function (){
    return view('traveler.confirm');
});
