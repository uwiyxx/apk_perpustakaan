@extends('layout-utama')

@section('konten-utama')
    <h3 class="text-center">Tambah Siswa</h3>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">NISN</label>
            <input type="text" class="form-control" id="nis" name="nis">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp">
        </div>
        <div class="mb-3">
            <label class="form-label">Kode Kelas</label>
            <input type="number" class="form-control" id="kode_kelas" name="kode_kelas">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
