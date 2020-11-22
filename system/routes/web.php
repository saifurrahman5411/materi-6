<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
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
Route::get('beranda',[HomeController:: class,'showBeranda']);

Route::get('kategory',[HomeController:: class,'showKategory']);
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);
Route::get('login',[AuthController:: class,'showLogin']);
Route::get('create',[HomeController:: class,'showCreate']);
Route::get('template.base',[HomeController:: class,'showTemplate']);


Route::get('user',[UserController:: class,'index']);
Route::get('userk/create',[UserController:: class,'create']);
Route::post('user',[UserController:: class,'store']);
Route::get('user/{user}',[UserController:: class, 'show']);
Route::get('user/{user}/edit',[UserController:: class, 'edit']);
Route::put('user/{user}',[UserController:: class, 'update']);
Route::delete('user/{user}',[UserController:: class, 'destroy']);




Route::get('promo',[PromoController:: class,'index']);
Route::get('promo/create',[PromoController:: class,'create']);
Route::post('promo',[PromoController:: class,'store']);
Route::get('promo/{promo}',[PromoController:: class, 'show']);
Route::get('promo/{promo}/edit',[PromoController:: class, 'edit']);
Route::put('promo/{promo}',[PromoController:: class, 'update']);
Route::delete('promo/{promo}',[PromoController:: class, 'destroy']);

