<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;



Route::get('/', [DashboardController::class, 'index']);   // Home
Route::get('/register', [FormController::class, 'register']); // Register
Route::post('/welcome', [FormController::class, 'welcome']); // Welcome
Route::resource('genre', GenreController::class); //genre
