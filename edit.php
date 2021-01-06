<?php
include 'koneksi.php';

$id = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' where id_produk='$id'");
header("location:index.php");
