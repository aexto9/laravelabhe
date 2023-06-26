<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormController;
use App\Http\Controllers\ForminputController;

use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
//use Auth:
use Illuminate\Support\Facades\Auth;


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

Route::get('/after_register',function(){
    return view('after_register');
});

route::get('/detailproduk',[DetailProdukController::class, 'index']);

Route::group(['middleware'=> ['auth','role:admin-manager']], function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori_produk');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk/update');
Route::get('/produk/view/{id}', [ProdukController::class, 'view'])->name('produk.view/{id}');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk/edit/{id}');
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk/delete/{id}');

Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan/store', [PesananController::class, 'store']);
Route::post('/pesanan/update', [PesananController::class, 'update'])->name('pesanan/update');
Route::get('/pesanan/view/{id}', [PesananController::class, 'view'])->name('pesanan.view/{id}');
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan/edit/{id}');
Route::get('/pesanan/delete/{id}', [PesananController::class, 'delete'])->name('pesanan/delete/{id}');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

