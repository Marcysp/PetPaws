<?php

use App\Http\Controllers\kategoriHewanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Produk_brandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Produk_kategoriController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('layouts.admin.sidenav');
});
Route::get('/home', function () {
    return view('layouts.user.landing');
});

Route::get('/produk', [ProdukController::class, 'index']);
// Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
// Route::get('/produk', [ProdukController::class, 'index'])->middleware('guest');
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Route::get('/stok', [ProdukController::class, 'stok']);

Route::get('/kategori', [Produk_kategoriController::class, 'index']);
Route::post('/kategori/store', [Produk_kategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [Produk_kategoriController::class, 'edit']);
Route::put('/kategori/{id}', [Produk_kategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [Produk_kategoriController::class, 'destroy']);

Route::post('/hewan/store', [kategoriHewanController::class, 'store']);
Route::get('/hewan/{id}/edit', [kategoriHewanController::class, 'edit']);
Route::put('/hewan/{id}', [kategoriHewanController::class, 'update']);
Route::get('/hewan/delete/{id}', [kategoriHewanController::class, 'destroy']);

Route::post('/brand/store', [Produk_brandController::class, 'store']);
Route::get('/brand/{id}/edit', [Produk_brandController::class, 'edit']);
Route::put('/brand/{id}', [Produk_brandController::class, 'update']);
Route::get('/brand/delete/{id}', [Produk_brandController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

// User
// Route::get('/login', [loginController::class, 'index'])->name('home');
