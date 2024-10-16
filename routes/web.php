<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\backend\BlogController as BackendBlogController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'blogdetail'])->name('blogdetail');
//backend
Route::get('/login',[LoginController::class,'index'])->name('backend.login');
Route::get('backend/blog',[BackendBlogController::class,'index'])->name('backend.blog');
Route::get('backend/blog/tambah',[BackendBlogController::class,'tambah'])->name('backend.blog.tambah');
Route::post('backend/blog/aksi_tambah',[BackendBlogController::class,'aksi_tambah'])->name('backend.blog.aksi_tambah');
Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/slider/tambah',[SliderController::class,'tambah'])->name('backend.slider.tambah');
Route::post('backend/slider/aksi_tambah',[SliderController::class,'aksi_tambah'])->name('backend.slider.aksi_tambah');
Route::get('backend/layanan',[ServiceController::class,'index'])->name('backend.service');

