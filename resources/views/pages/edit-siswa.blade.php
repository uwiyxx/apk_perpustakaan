@extends('layout-utama')

@section('konten-utama')
    <h3 class="text-center">Edit Siswa</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">NISN</label>
            <input type="text" class="form-control" name="nisn" value="{{ $siswa->nisn }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control"  name="alamat" value="{{ $siswa->alamat }}">
        </div>
        <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" class="form-control" name="no_telp" value="{{ $siswa->no_telp }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Kode Kelas</label>
            <input type="number" class="form-control" name="kode_kelas" value="{{ $siswa->kode_kelas }}">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
