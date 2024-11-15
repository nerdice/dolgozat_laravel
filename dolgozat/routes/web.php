<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/new-genre', [GenreController::class, 'index'])->name('new-genre.index');
Route::post('/new-genre', [GenreController::class, 'store'])->name('new-genre.store');

Route::get('/new-book', [BookController::class, 'index'])->name('new-book.index');
Route::post('/new-book', [BookController::class, 'store'])->name('new-book.store');

Route::get('/books', [BookController::class, 'books_index'])->name('books.index');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('books/book/{id}', [BookController::class, 'book_index'])->name('book.index');

Route::post('/rent', [RentController::class, 'store'])->name('rent.store');

Route::get('/rentals', [RentController::class, 'index'])->name('rents.index');

require __DIR__.'/auth.php';
