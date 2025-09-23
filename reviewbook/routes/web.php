<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'index']);   // Home
Route::get('/register', [FormController::class, 'register']); // Register
Route::post('/welcome', [FormController::class, 'welcome']); // Welcome
