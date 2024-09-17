<?php

use App\Http\Controllers\BukuController;
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
Route::get('/isi-data-buku',function(){
    return view('pages/isi-data-buku');
});
Route::get('/data-siswa',function(){
    return view('pages/data-siswa');
});
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