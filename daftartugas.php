<?php
// Panggil koneksi database
include "koneksidb.php";

// Persiapan hapus data
if (isset($_POST['bhapus'])) {
    // Gunakan kode_tugas atau ID yang lebih spesifik untuk menghapus
    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_tugas WHERE kode_tugas = '$_POST[kode_tugas]'");

    // Jika hapus sukses
    if ($hapus) {
        echo "<script> 
                alert('Hapus data berhasil');
                document.location = 'daftartugas.php';
              </script>";
    } else {
        echo "<script> 
                alert('Hapus data gagal');
                document.location = 'daftartugas.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <title>Daftar Tugas</title>
</head>

<body class="bg-danger bg-opacity-75">
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-danger">
        <div class="container-fluid">
            <div class="text-center">
                <img src="nubas.jpg.png" class="rounded" width="35%" margin-left="3cm">
            </div>
            <a class=" fs-4 navbar-brand  text-white" href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a>
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

    <h2 class="text-center text-white"><u>Daftar Tugas</u></h2>
    <div class="container">
        <table class="table table-secondary table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Tugas</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Tenggat</th>
                    <th class="text-center">Keterangan Tugas</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="table table-secondary table-striped table-secondary">
                <?php
                $no = 1;
                $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_tugas");
                while ($data = mysqli_fetch_array($tampil)):
                ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $data['Mapel'] ?></td>
                    <td class="text-center"><?= $data['Tugas'] ?></td>
                    <td class="text-center"><?= $data['Kelas'] ?></td>
                    <td class="text-center"><?= $data['Tenggat'] ?></td>
                    <td class="text-center"><?= $data['Beres'] ?></td>
                    <td class="text-center">
                        <a href="ubah.php?kode_tugas=<?= $data['kode_tugas']?>">
                            <button class="btn btn-outline-success" type="button">Ubah</button>
                        </a> 
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="./fontawesome/js/all.min.js"></script>
</body>

</html>
