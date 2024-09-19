@extends('layout-utama')

@section('konten-utama')
    <h3 class="text-center">Edit Buku</h3>
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Buku</label>
            <input type="number" class="form-control" id="kode_buku" name="kode_buku" value="{{ $buku->kode_buku }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
        </div>
        <div class="mb-3">
            <label class="form-label">penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
