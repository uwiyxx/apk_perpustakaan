<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout-utama');
});
Route::get('/dashboard',function(){
    return view('pages/dashboard');
});
Route::get('/data-buku',function(){
    return view('pages/data-buku');
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