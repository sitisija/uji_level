<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UjiLevelController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/uji-level', [UjiLevelController::class, 'index'])->name('uji.level');
Route::get('/produk-saya', [ProdukSayaController::class, 'index'])->name('produk.saya');
Route::get('/data-produk', [DataProdukController::class, 'index'])->name('data.produk');
Route::get('/data-produk/tambah', [DataProdukController::class, 'tambah'])->name('data.produk.tambah');
Route::post('/data-produk/aksi_tambah', [DataProdukController::class, 'aksi_tambah'])->name('data.produk.aksi_tambah');
Route::get('/data-produk/edit{id}', [DataProdukController::class, 'edit'])->name('data.produk.edit');
Route::post('/data-produk/aksi_edit{id}', [DataProdukController::class, 'aksi_edit'])->name('data.produk.aksi_edit');
Route::post('/data-produk/aksi_hapus{id}', [DataProdukController::class, 'aksi_hapus'])->name('data.produk.aksi_hapus');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.tambah');
Route::post('/kategori/aksi_tambah', [KategoriController::class, 'aksi_tambah'])->name('kategori.aksi_tambah');
Route::get('/kategori/edit{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/aksi_edit{id}', [KategoriController::class, 'aksi_edit'])->name('kategori.aksi_edit');
Route::delete('/kategori/aksi_hapus{id}', [KategoriController::class, 'aksi_hapus'])->name('kategori.aksi_hapus');