<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\kategoriHewanController;
use App\Http\Controllers\listOrderController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\Produk_brandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Produk_kategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StokController;
use Illuminate\Routing\RouteGroup;

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
    return view('layouts.user.landing');
});
Route::get('/landing', function () {
    return view('layouts.user.landing');
});

// Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');

Route::group(['middleware' => ['auth','is_admin:1']],function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
    Route::put('/produk/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('/stok', [StokController::class, 'index']);
    Route::put('/produk/{id}', [StokController::class, 'updateStok'])->name('stok.update');

    Route::get('/kategori', [Produk_kategoriController::class, 'index']);
    Route::post('/kategori/store', [Produk_kategoriController::class, 'store']);
    Route::put('/kategori/{id}', [Produk_kategoriController::class, 'update'])->name('kategori.update');
    Route::get('/kategori/delete/{id}', [Produk_kategoriController::class, 'destroy']);

    Route::post('/hewan/store', [kategoriHewanController::class, 'store']);
    Route::put('/hewan/{id}', [kategoriHewanController::class, 'update'])->name('hewan.update');
    Route::get('/hewan/delete/{id}', [kategoriHewanController::class, 'destroy']);

    Route::post('/brand/store', [Produk_brandController::class, 'store']);
    Route::put('/brand/{id}', [Produk_brandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [Produk_brandController::class, 'destroy']);

    Route::get('/service-paket',[ServiceController::class, 'index']);
    Route::post('/service-paket/grooming/store', [ServiceController::class, 'storeGrooming'])->name('paket-grooming.store');
    Route::put('/service-paket/grooming/{id}', [ServiceController::class, 'updateGrooming'])->name('paket-grooming.update');
    Route::get('/service-paket/grooming/delete/{id}', [ServiceController::class, 'destroyGrooming']);

    Route::post('/service-paket/penitipan/store', [ServiceController::class, 'storePenitipan'])->name('paket-penitipan.store');
    Route::put('/service-paket/penitipan/{id}', [ServiceController::class, 'updatePenitipan'])->name('paket-penitipan.update');
    Route::get('/service-paket/penitipan/delete/{id}', [ServiceController::class, 'destroyPenitipan']);

    Route::get('/admin/pesanan/grooming', [listOrderController::class, 'groomingList']);
    Route::get('/admin/pesanan/produk', [listOrderController::class, 'produkList']);
    Route::get('/admin/pesanan/penitipan', [listOrderController::class, 'penitipanList']);
});

// User
Route::group(['middleware' => ['auth','is_admin:0']],function(){
    Route::get('/produk/detail/{id}', [PesanController::class, 'index']);
    Route::post('/pesan/{id}', [PesanController::class, 'pesan']);
    Route::get('/keranjang', [PesanController::class, 'keranjang']);
    Route::delete('/keranjang/{id}', [PesanController::class, 'delete']);
    Route::post('/update/item/keranjang/{id}', [PesanController::class, 'update']);

    Route::post('check-out/produk',[PesanController::class, 'checkout']);
    Route::get('/pay',[PesanController::class, 'pay'])->name('pay');
    Route::post('/midtrans-callingback',[PesanController::class, 'callback']);

    Route::get('/grooming', [GroomingController::class, 'index']);
    Route::post('/service/grooming/{id}', [GroomingController::class, 'pesan']);
    Route::get('/list/grooming', [GroomingController::class, 'keranjang']);
    Route::delete('/list/grooming/{id}', [GroomingController::class, 'delete']);
    Route::post('/validate-grooming', [GroomingController::class, 'validateGrooming']);
    Route::post('check-out/grooming',[GroomingController::class, 'checkout']);

    Route::get('/penitipan', [PenitipanController::class, 'index']);
    Route::post('/service/penitipan/{id}', [PenitipanController::class, 'pesan']);
    Route::post('/check-out/penitipan',[PenitipanController::class, 'checkout']);

    Route::get('/pesanan/produk', [listOrderController::class, 'userProdukList'])->name('pesanan-produk');
    Route::get('/pesanan/grooming', [listOrderController::class, 'userGroomingList'])->name('pesanan-grooming');
    Route::get('/pesanan/penitipan', [listOrderController::class, 'userPenitipanList'])->name('pesanan-penitipan');
});
// guest
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);


