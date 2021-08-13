<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/bahan', function () {
    return view('bahan');
})->name('bahan');

Route::get('/resep', function () {
    return view('resep');
})->name('resep');

Route::get('/daftar-resep', function () {
    return view('daftar_resep');
})->name('daftar_resep');

Route::get('/gaji', function () {
    return view('gaji');
})->name('gaji');

Route::get('/kehadiran', function () {
    return view('kehadiran');
})->name('kehadiran');

Route::get('/pegawai', function () {
    return view('pegawai');
})->name('pegawai');

Route::get('/supplier', function () {
    return view('supplier');
})->name('supplier');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
