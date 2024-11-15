<?php
// Include the database connection
include "koneksidb.php";

// Check if the save button is clicked
if (isset($_POST['btnsimpan'])) {
    // Prepare data for saving
    $mapel = $_POST['Mapel'];
    $tugas = $_POST['Tugas'];
    $kelas = $_POST['Kelas'];
    $tenggat = $_POST['Tenggat'];

    // Use prepared statements to prevent SQL injection
    $query = $koneksidb->prepare("INSERT INTO tb_tugas (Mapel, Tugas, Kelas, Tenggat) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $mapel, $tugas, $kelas, $tenggat);  // 'ssss' means all are strings

    // Execute the query and check if successful
    if ($query->execute()) {
        echo "<script> alert('Berhasil unggah tugas'); </script>";
        echo "<script> window.location.href='input.php'; </script>";
    } else {
        echo "<script> alert('Gagal unggah tugas'); </script>";
        echo "<script> window.location.href='input.php'; </script>";
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <title>Latihan APK</title>
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

    <div class="container">
        <h2 class="text-center text-white">Data Input Tugas</h2>
        <form method="post" name="form1">
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="Mapel">Mata Pelajaran</label>
                    <input type="text" required name="Mapel" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Tugas">Tugas</label>
                    <input type="text" required name="Tugas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas :</label><br>
                    <div class="col-md-4">
                        <select class="form-control" name="Kelas">
                            <option value=""></option>
                            <option value="AK1">10 AK</option>
                            <option value="FM1">10 FM</option>
                            <option value="RPL1">10 PPLG</option>
                            <option value="AK2">11 AK</option>
                            <option value="FM2">11 FM</option>
                            <option value="RPL2">11 PPLG</option>
                            <option value="AK3">12 AK</option>
                            <option value="FM3">12 FM</option>
                            <option value="RPL3">12 PPLG</option>
                        </select>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="Tenggat">Tenggat waktu</label>
                    <input type="date" required name="Tenggat" class="form-control">
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx mx-auto">
                <button class="btn btn-success" name="btnsimpan" type="submit">Unggah</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
    <script src="./fontawesome/js/all.min.js"></script>
</body>

</html>
