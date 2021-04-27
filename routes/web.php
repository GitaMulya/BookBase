<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);

Route::get('/books', [BooksController::class, 'index'])->name('books')->middleware(['auth:sanctum', 'verified']);
Route::get('/books/create', [BooksController::class, 'create'])->name('books')->middleware(['auth:sanctum', 'verified']);
Route::get('/books/{book}', [BooksController::class, 'show'])->name('book')->middleware(['auth:sanctum', 'verified']);
Route::post('/books', [BooksController::class, 'store'])->name('books')->middleware(['auth:sanctum', 'verified']);
Route::get('/books/{id}/delete', [booksController::class, 'delete'])->name('booksdel')->middleware(['auth:sanctum', 'verified']);
// Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('book')->middleware(['auth:sanctum', 'verified']);
Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('book')->middleware(['auth:sanctum', 'verified']);
Route::patch('/books/{book}', [BooksController::class, 'update'])->name('book')->middleware(['auth:sanctum', 'verified']);


Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori')->middleware(['auth:sanctum', 'verified']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori')->middleware(['auth:sanctum', 'verified']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori')->middleware(['auth:sanctum', 'verified']);
// Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategorii')->middleware(['auth:sanctum', 'verified']);
// Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('kategorii')->middleware(['auth:sanctum', 'verified']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete'])->name('kategorii')->middleware(['auth:sanctum', 'verified']);
Route::get('/kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategorii')->middleware(['auth:sanctum', 'verified']);
Route::patch('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategoriupdate')->middleware(['auth:sanctum', 'verified']);

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier')->middleware(['auth:sanctum', 'verified']);
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier')->middleware(['auth:sanctum', 'verified']);
Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier')->middleware(['auth:sanctum', 'verified']);
//Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplieri')->middleware(['auth:sanctum', 'verified']);
Route::get('/supplier/{id}/delete', [SupplierController::class, 'delete'])->name('supplierdel')->middleware(['auth:sanctum', 'verified']);
Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliered')->middleware(['auth:sanctum', 'verified']);
Route::patch('/supplier/{supplier}', [SupplierController::class, 'update'])->name('supplierupdate')->middleware(['auth:sanctum', 'verified']);