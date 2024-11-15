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
