<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormController;
use App\Http\Controllers\ForminputController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;


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

Route::get('/salam',function(){
    return 'Assalamualaikum';
});

//routing mengarahkan ke view
Route::get('/hallo', function(){
    return view ('hallo');
});

//routing mengarahkan ke nilai
Route::get('/nilai', function(){
    return view ('nilai');
});

Route::get('/pemeriksaan', function(){
    return view ('pemeriksaan');
});

Route::get('/hallo2', function(){
    return view ('hallo.halloworld');
});

Route::get('/skill', [ForminputController::class, 'index']);
Route::get('/skill', [ForminputController::class, 'array']);
Route::post('/result', [ForminputController::class, 'hasil']);

Route::get('/form',[FormController::class,'index']);
Route::post('/hasil',[FormController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori_produk');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);