<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/tes', function () {
    return view('tes');
});

Auth::routes();

Route::resource('Tamu', TamuController::class);
Route::resource('Utama', UtamaController::class);
Route::resource('Kategori', KategoriController::class);
Route::get('/Kategori/{id_kategori}/hapus', [KategoriController::class,'hapus'])->name('Kategori.hapus');
Route::get('/Utama/{id:tamu}/hapus', [UtamaController::class,'hapus'])->name('Utama.hapus');



