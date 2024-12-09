<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UjiLevelController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/uji-level', [UjiLevelController::class, 'index'])->name('uji.level');
Route::get('/produk-saya', [ProdukSayaController::class, 'index'])->name('produk.saya');
Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
Route::post('/produk/aksi_tambah', [ProdukController::class, 'aksi_tambah'])->name('produk.aksi_tambah');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/aksi_edit/{id}', [ProdukController::class, 'aksi_edit'])->name('produk.aksi_edit');
Route::delete('/produk/aksi_hapus/{id}', [ProdukController::class, 'aksi_hapus'])->name('produk.aksi_hapus');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.tambah');
Route::post('/kategori/aksi_tambah', [KategoriController::class, 'aksi_tambah'])->name('kategori.aksi_tambah');
Route::get('/kategori/edit{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/aksi_edit{id}', [KategoriController::class, 'aksi_edit'])->name('kategori.aksi_edit');
Route::delete('/kategori/aksi_hapus{id}', [KategoriController::class, 'aksi_hapus'])->name('kategori.aksi_hapus');