@extends('layout-utama')

@section('konten-utama')
<h3 class="text-center">Tambah Data</h3>
<button class="tambah-data-btn mt-2" style="background-color:#F0A8D0;" onclick="window.location.href='add_data.php'">+ Tambah Buku</button>
<form method="POST">
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_buku">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit">
      </div>
      <th style="border: 1px solid black;"><button href="" class="btn btn-primary">Simpan</button>
        <a href="" class="btn btn-danger">Batal</a></th>
    </tr>
  </form>
@endsection
