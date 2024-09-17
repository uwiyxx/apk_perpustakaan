@extends('layout-pengunjung')

@section('css-pengunjung')
    <style>
        body {
            background-color: rgb(230, 230, 230);
        }

        .buku-container {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 14rem));
            gap: 2rem;
        }
    </style>
@endsection

@section('konten-pengunjung')
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="background-color: #F0A8D0">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="card" class=" buku-container">
        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\8.webp" class="card-img-top" alt="...">
        </div>
        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\9.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\10.png" class="card-img-top" alt="...">
        </div>

        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\11.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\12.jpg" class="card-img-top" alt="...">
        </div>


        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\14.jpg" class="card-img-top" alt="...">
        </div>


        <div class="card mt-3" style="width: 14rem;">
            <img src="\image\15.jpg" class="card-img-top" alt="...">
        </div>
    </div>
@endsection
