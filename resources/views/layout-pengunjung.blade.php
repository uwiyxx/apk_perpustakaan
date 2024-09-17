<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    @yield('css-pengunjung')
</head>
<body>
    <head>
        <nav class="navbar " style="background-color: #C379A2">
            <div class="container-fluid">
                <img src="\image\icons8-book-64.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <a class="navbar-brand fw-bold text-white">PERPUSTAKAAN</a>
                <svg class="bi me-2" width="800" height="20">
                    <use xlink:href="" />
                </svg>
                <a class="navbar-brand" href="#">
                    {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
                    <strong a class="navbar-brand fw-bold text-white">Sistem Informasi Perpustakaan</strong>
                </a>
            </div>
        </nav>
    </head>
    <div id="main" class="d-flex">
        <div id="sidebar">

            <div class="d-flex flex-column flex-shrink-0 p-3 bg-white text-dark" style="width: 280px;
          height:calc(100vh - 58px);" >
            <div id="dropdown" class="container  text-left">
                <span class="fs-3">Daftar Buku</span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto text-white mt-2">
              <li class="dropdown-item-text mt-1">
                <a href="/fiksi" class="nav-link active text-dark" style="background-color:#F0A8D0" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Fiksi
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="/non-fiksi" class="nav-link active text-dark " style="background-color:#F0A8D0" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#table"/></svg>
                  NonFiksi
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#F0A8D0" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Pendidikan
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#F0A8D0" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Sejarah
                </a>
              </li>
              <li class="dropdown-item-text mt-2">
                <a href="#" class="nav-link active text-dark" style="background-color:#F0A8D0" aria-current="page">
                  <svg class="bi me-4" width="16" height="16"><use xlink:href="#grid"/></svg>
                  Biografi
                </a>
              </li>
            </ul>
            <hr>

          </div>
        </div>
        <div id="isi-konten" style="width:100%;max-width: calc(100% - 280px);" style="background-color: #ECEAEA" class="container-fluid m-3">
            @yield('konten-pengunjung')
          </div>
    </div>
    <footer>

    </footer>

    <Script src="\js\bootstrap.bundle.min.js"></Script>
</body>
</html>