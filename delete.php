<?php
include('koneksi.php');

$id = $_GET['id_produk'];
$arkademy = "DELETE from produk where id_produk='$id'";
mysqli_query($koneksi, $arkademy);
header("location:index.php");
