<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormController;
use App\http\Controllers\DashboardController;
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

Route::get('/hallo2', function(){
    return view ('hallo.halloworld');
});

Route::get('/form',[FormController::class,'index']);
Route::post('/hasil',[FormController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index']);