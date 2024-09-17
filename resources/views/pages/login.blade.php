<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/image/perpus.jpg'); /* Background perpustakaan */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi background form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
        }

        .login-box img {
            width: 80px;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-masuk {
            background-color: #e74c3c; /* Warna tombol merah sesuai gambar */
            color: white;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            background-color: #e91e63; /* Warna pink pada navbar */
        }

        .navbar-brand img {
            width: 30px;
            height: 30px;
        }

        .navbar .navbar-toggler-icon {
            background-color: white;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <img src="\image\icons8-book-64.png" alt="Logo">
                PERPUSTAKAAN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Daftar Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Box -->
    <div class="login-box">
        <img src="\image\icons8-book-64.png" alt="Logo Buku"> <!-- Logo Buku Admin -->
        <h2>Login Admin</h2>
        <form>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-masuk w-100">Masuk</button>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>