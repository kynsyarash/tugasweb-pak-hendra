<?php
// Panggil koneksi database
include "koneksidb.php";

// Ambil data tugas berdasarkan kode_tugas yang diberikan
$tampil = mysqli_query($koneksidb, "SELECT * FROM tb_tugas WHERE kode_tugas = '$_GET[kode_tugas]'");
$data = mysqli_fetch_array($tampil);
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
    <title>Ubah Data</title>
</head>

<body>
    <form method="POST" name="ubah">
        <div class="col-md-4 mx-auto">
            <h2 class="text-center">Ubah Tugas</h2>
            <div class="mb-2">
                <label for="Mapel">Mapel</label>
                <input type="text" class="form-control" name="Mapel" value="<?php echo $data['Mapel']; ?>">
            </div>
            <div class="mb-2">
                <label for="Tugas">Tugas</label>
                <input type="text" class="form-control" name="Tugas" value="<?php echo $data['Tugas']; ?>">
            </div>
            <div class="mb-2">
                <label for="Kelas">Kelas</label>
                <input type="text" class="form-control" name="Kelas" value="<?php echo $data['Kelas']; ?>">
            </div>
            <div class="mb-2">
                <label for="Tenggat">Tenggat</label>
                <input type="date" class="form-control" name="Tenggat" value="<?php echo $data['Tenggat']; ?>">
            </div>
            <div class="mb-2">
                <label for="Beres">Keterangan Tugas</label>
                <input type="text" class="form-control" name="Beres" value="<?php echo $data['Beres']; ?>">
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" name="btubah" type="submit">Simpan</button>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="daftartugas.php" class="btn btn-danger">Batal</a>
        </div>
    </form>

</body>

</html>

<?php
// Uji jika tombol ubah diklik
if (isset($_POST['btubah'])) {
    // Persiapkan perintah untuk mengubah data
    $ubah = mysqli_query($koneksidb, "UPDATE tb_tugas SET
        Mapel = '$_POST[Mapel]',
        Tugas = '$_POST[Tugas]',
        Kelas = '$_POST[Kelas]',
        Tenggat = '$_POST[Tenggat]',
        Beres = '$_POST[Beres]'
        WHERE kode_tugas = '$_GET[kode_tugas]'");

    // Jika berhasil diubah
    if ($ubah) {
        echo "<script> 
                alert('Ubah data berhasil');
                document.location = 'daftartugas.php';
              </script>";
    } else {
        echo "<script> 
                alert('Ubah data gagal');
                document.location = 'daftartugas.php';
              </script>";
    }
}
?>