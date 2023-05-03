<?php

use App\Http\Controllers\Produk_brandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Produk_kategoriController;

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
Route::get('/nav', function () {
    return view('layouts.admin.headerNav');
});
Route::get('/main', function () {
    return view('test');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Route::get('/kategori', [Produk_kategoriController::class, 'index']);
Route::post('/kategori/store', [Produk_kategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [Produk_kategoriController::class, 'edit']);
Route::put('/kategori/{id}', [Produk_kategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [Produk_kategoriController::class, 'destroy']);

Route::get('/brand', [Produk_brandController::class, 'index']);
Route::post('/brand/store', [Produk_brandController::class, 'store']);
Route::get('/brand/{id}/edit', [Produk_brandController::class, 'edit']);
Route::put('/brand/{id}', [Produk_brandController::class, 'update']);
Route::get('/brand/delete/{id}', [Produk_brandController::class, 'destroy']);

