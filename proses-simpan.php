<?php
include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($koneksi, "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES('$nama_produk', '$keterangan', '$harga', '$jumlah') ");
if ($query) {
    echo 'Data berhasil Disimpan <a href="index.php">Halaman Utama</a>';
} else {
    echo 'Data Gagal Disimpan <a href="form-input.php">Ulangi</a>';
}