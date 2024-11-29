<?php
include 'koneksi.php'; // Pastikan koneksi ke database berhasil

// Jalankan query untuk mengambil data dari tabel buku_tamu
$selectQuery = "SELECT * FROM buku_tamu";
$result = $koneksi->query($selectQuery);

// Validasi query
if (!$result) {
    die("Error: " . $koneksi->error);
}
?>
