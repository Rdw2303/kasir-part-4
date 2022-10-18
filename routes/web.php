<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Transaksi_DetailController;
use App\Http\Controllers\TransaksiController;
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
Route::get('/template',function(){
    return view('master');
});
Route::get('/ridwan', function () {
    return view('welcome');
});


//Transaksi_Detail
Route::get('/detail',[Transaksi_DetailController::class,'index']);
Route::get('/transaksi_detail/detail{id}',[Transaksi_DetailController::class,'index']);
Route::get('/detail/tambah',[Transaksi_DetailController::class,'tambah']);
Route::post('/detail/create',[Transaksi_DetailController::class,'create']);
Route::get('/detail/hapus{id}',[Transaksi_DetailController::class,'hapus']);
Route::get('/detail/edit{id}',[Transaksi_DetailController::class,'edit']);
Route::post('/detail/update{id}',[Transaksi_DetailController::class,'update']);

//Barang
Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/tambah',[BarangController::class,'tambah']);
Route::post('/barang/create',[BarangController::class,'create']);
Route::get('/barang/hapus{id}',[BarangController::class,'hapus']);
Route::get('/barang/edit{id}',[BarangController::class,'edit']);
Route::post('/barang/update{id}',[BarangController::class,'update']);

//Transaksi
Route::get('/',[TransaksiController::class,'index']);
Route::get('/transaksi/tambah',[TransaksiController::class,'tambah']);
Route::post('/transaksi/create',[TransaksiController::class,'create']);
Route::get('/transaksi/hapus{id}',[TransaksiController::class,'hapus']);
Route::get('/transaksi/edit{id}',[TransaksiController::class,'edit']);
Route::post('/transaksi/update{id}',[TransaksiController::class,'update']);

//Admin
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/tambah',[AdminController::class,'tambah']);
Route::post('/admin/create',[AdminController::class,'create']);
Route::get('/admin/hapus{id}',[AdminController::class,'hapus']);
Route::get('/admin/edit{id}',[AdminController::class,'edit']);
Route::post('/admin/update{id}',[AdminController::class,'update']);

//Jenis
Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/tambah',[JenisController::class,'tambah']);
Route::post('/jenis/create',[JenisController::class,'create']);
Route::get('/jenis/hapus{id}',[JenisController::class,'hapus']);
Route::get('/jenis/edit{id}',[JenisController::class,'edit']);
Route::post('/jenis/update{id}',[JenisController::class,'update']);

//Supllier
Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/supplier/tambah',[SupplierController::class,'tambah']);
Route::post('/supplier/create',[SupplierController::class,'create']);
Route::get('/supplier/hapus{id}',[SupplierController::class,'hapus']);
Route::get('/supplier/edit{id}',[SupplierController::class,'edit']);
Route::post('/supplier/update{id}',[SupplierController::class,'update']);

