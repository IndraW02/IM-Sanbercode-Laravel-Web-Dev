<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes untuk profile (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes untuk Genre (CRUD)
Route::middleware('auth')->group(function () {
    Route::resource('genres', GenreController::class);
});

// Routes untuk Book (CRUD)
Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    // Routes untuk komentar buku
  Route::post('books/{book}/comments', [CommentController::class, 'store'])
    ->name('books.comments.store')
    ->middleware('auth');
});

require __DIR__.'/auth.php';
