@extends('layout-utama')

@section('konten-utama')
<h3 class="text-center">Data Buku </h3>
<div class="container">
    <button class="tambah-data-btn mt-2" style="background-color:#F0A8D0;" onclick="window.location.href='add_data.php'">+ Tambah Data</button>
</div>
    <div class="d-flex container mt-2">
        <table class="table" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th scope="col" style="border: 1px solid black;">No</th>
                    <th scope="col"style="border: 1px solid black;">Id Buku</th>
                    <th scope="col"style="border: 1px solid black;">Judul Buku</th>
                    <th scope="col"style="border: 1px solid black;">Pengarang</th>
                    <th scope="col"style="border: 1px solid black;">Penerbit</th>
                    <th scope="col"style="border: 1px solid black;">Tahun</th>
                    <th scope="col"style="border: 1px solid black;">Kelola</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="border: 1px solid black;">1</th>
                    <td style="border: 1px solid black;">B001</td>
                    <td style="border: 1px solid black;">Dilan 1990</td>
                    <td style="border: 1px solid black;">Pidi Baiq</td>
                    <td style="border: 1px solid black;">Pastel Books</td>
                    <td style="border: 1px solid black;">2014</td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">2</th>
                    <td style="border: 1px solid black;">B002</td>
                    <td style="border: 1px solid black;">Teluk Angkasa</td>
                    <td style="border: 1px solid black;">Eka Aryani</td>
                    <td style="border: 1px solid black;">Bumi Semesta Media</td>
                    <td style="border: 1px solid black;">2019</td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">3</th>
                    <td style="border: 1px solid black;">B003</td>
                    <td style="border: 1px solid black;">Argantara</td>
                    <td style="border: 1px solid black;">Falistiyana</td>
                    <td style="border: 1px solid black;">Galaxy</td>
                    <td style="border: 1px solid black;">2021</td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">4</th>
                    <td style="border: 1px solid black;">B004</td>
                    <td style="border: 1px solid black;">Jatuh Ke Angkasa</td>
                    <td style="border: 1px solid black;">Nabila Anasty Fahzaria</td>
                    <td style="border: 1px solid black;">Pastel Books</td>
                    <td style="border: 1px solid black;">2018</td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">5</th>
                    <td style="border: 1px solid black;">B005</td>
                    <td style="border: 1px solid black;">Sejarah Dunia</td>
                    <td style="border: 1px solid black;">Hutton Webster</td>
                    <td style="border: 1px solid black;">World History Publishing Ltd</td>
                    <td style="border: 1px solid black;">1921</td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
