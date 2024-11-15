<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
    }

    .navbar {
        border-radius: 10px;
        justify-content: center;
    }

    .carousel-inner {
        border-radius: 10px;
        margin-top: 30px;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        /* Sesuaikan dengan tinggi yang diinginkan */
        object-fit: cover;
        /* Ini akan menjaga aspek rasio gambar */
    }

    .container {
        margin-left: 50px;
    }

    .footer {
        margin-top: 200px;
    }

    .text-light {
        text-align: left;
    }
</style>

<body class="bg-danger bg-opacity-75">
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-danger">
        <div class="container-fluid">
            <div class="text-center">
                <img src="nubas.jpg.png" class="rounded" width="35%" margin-left="3cm">
            </div>
            <a class=" fs-4 navbar-brand  text-white" href="menu.php"><i class="fa-solid fa-house"></i> Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="fs-4 nav-link active  text-white" aria-current="page" href="input.php"><i
                                class="fa-solid fa-pen-to-square"></i> Input Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-4 nav-link  text-white" href="daftartugas.php"><i class="fa-solid fa-list"></i>
                            Daftar Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-4 nav-link  text-white" href="history.php"><i class="fa-solid fa-list"></i>
                            History Tugas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- indicator start -->
    <div class="container-fluid">
        <div id="icarouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active object-fit-cover" data-bs-interval="1000">
                    <img src="code.jfif" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="Website Developer.jfif" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
                    <img src="wpp.jfif" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- indicator end -->
    <div class="container">
        <h1 class="mt-5 text-white">Tugasku<span class="badge text-bg-dark">Prestasiku</span></h1>
        <p class="text-light">Kesuksesan bukanlah sesuatu yang datang dalam sekejap,
            melainkan sebuah perjalanan panjang yang dibangun melalui proses. Setiap tugas
            yang kita selesaikan, sekecil apapun, adalah batu loncatan menuju pencapaian yang lebih besar.
            Dengan menyelesaikan setiap tugas dengan penuh tanggung jawab, kita tidak hanya mengasah keterampilan,
            tetapi juga membentuk karakter yang kuat. Ingatlah bahwa setiap langkah kecil yang kita ambil
            hari ini akan menjadi bagian dari kesuksesan besar di masa depan.</p>
    </div>
    <!-- footer -->
    <div class="text-center">
        <div class="footer">
            <p class="text-white">Nusabangsa@gmail.com</p>
            <p class="text-white">000-111-222</p>
        </div>
    </div>
    <script src="./fontawesome/js/all.min.js"></script>
</body>

</html>