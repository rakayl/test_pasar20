<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PenjumlahanController
};
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
Route::post('/penjumlahan', [App\Http\Controllers\PenjumlahanController::class, 'index'])->name('penjumlahan');
Route::post('/provinci', [App\Http\Controllers\PenjumlahanController::class, 'provinci'])->name('provinci');
Route::post('/kota', [App\Http\Controllers\PenjumlahanController::class, 'kota'])->name('kota');
Route::post('/cek_ongkir', [App\Http\Controllers\PenjumlahanController::class, 'ongkir'])->name('cek_ongkir');