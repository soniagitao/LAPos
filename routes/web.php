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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/menuData', 'owner/Menu');

Route::view('/bahanData', 'owner/Bahan');

Route::view('/karyawanData', 'owner/Karyawan');

Route::view('/operasionalData', 'owner/Operasional');

Route::view('/resepData', 'owner/Resep');

Route::view('/stokData', 'owner/Stok');

Route::view('/laporanData', 'owner/Laporan');

Route::view('/topData', 'owner/Top');