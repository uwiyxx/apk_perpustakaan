<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\SiswaController;
use App\Models\buku;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('layout-utama');
});
Route::get('/layout-pengunjung', function(){
    return view('layout-pengunjung');
});
Route::get('/dashboard',function(){
    return view('pages/dashboard');
});
Route::get('/peminjaman',function(){
    return view('pages/peminjaman');
});
Route::get('/data-siswa',[SiswaController::class,'utama']);
Route::get('/login',function(){
    return view('pages/login');
});
Route::get('/master-data',function(){
    $buku = new buku();

    $data =[
        'buku'=>$buku->all()
    ];
    return view('pages/master-data',$data);
});
Route::get('/fiksi',function(){
    return view('pages/fiksi');
});
Route::get('/non-fiksi',function(){
    return view('pages/non-fiksi');
});
Route::get('/tambah-data',[BukuController::class, 'tambah']);
Route::post('/tambah-data',[BukuController::class, 'simpan']);
Route::get('/edit/{kode_buku}',[BukuController::class, 'edit']);
Route::post('/edit/{kode_buku}',[BukuController::class, 'update']);
Route::get('/delete/{kode_buku}',[BukuController::class, 'delete']);

Route::get('/data-siswa',[SiswaController::class, 'utama']);
Route::get('/tambah-siswa',[SiswaController::class, 'tambah']);
Route::post('/tambah-siswa',[SiswaController::class, 'simpan']);
Route::get('/edit/{nis}',[SiswaController::class, 'tampil']);
Route::get('/edit/{nis}',[SiswaController::class, 'update']);
Route::get('/hapus/{nis}',[SiswaController::class, 'delete']); 