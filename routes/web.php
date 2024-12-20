<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'displayBooks'])->name('home');
Route::get('/book/{id}', [BookController::class, 'displayBookDetail']);

Route::middleware('auth')->group(function () {
    Route::get('/my-books', [BookController::class, 'displayBorrowedBooks']);
    Route::post('/borrow-book', [BookController::class, 'borrowBook'])->name('borrow.book');
    Route::post('/return-book', [BookController::class, 'returnBook'])->name('return.book');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
