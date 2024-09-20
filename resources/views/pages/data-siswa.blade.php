@extends('layout-utama')

@section('konten-utama')
<h3 class="text-center">Data Siswa </h3>
    <ul class="nav nav-pills flex mb-auto text-center text-white">
     
    <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
        <li class="">
            <div class="container">
                <a href="/tambah-siswa" class="tambah-data-btn mt-2" style="background-color:#F0A8D0;" onclick="window.location.href='add_data.php'">+ Tambah Data</a>
            </div>
        </li>
    </ul>
    <div class="d-flex container">

        <table class="table table-bordered border-primary border-dark mt-2 text-center">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NISN</th>
                    <th scope="col">nama</th>
                    <th scope="col">alamat</th>
                    <th scope="col">no telp</th>
                    <th scope="col">kelola</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data_siswa as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$item->nisn}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->no_telp}}</td>
                    <td><a href="/edit/{{$item->nis}}" class="btn text-white" style="background-color: #059C41">Edit</a>
                        <a href="/delete/{{$item->nis}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('css')
    <style>
        body {
            background-color: rgb(230, 230, 230);
        }
    </style>
@endsection