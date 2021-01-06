<?php
include 'koneksi.php';

$id = $_GET['id_produk'];
$produk = mysqli_query($koneksi, "SELECT * from produk where id_produk='$id'");
$row = mysqli_fetch_array($produk);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Input Data</title>
  </head>
  <body>
  <center>
    <div class="container">
    <h1 class="text-center">Silahkan Isi</h1>
    <br>
    <form action="edit.php" method="post">
    <input type="hidden" value="<?php echo $row['id_produk']; ?>" name="id_produk">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nama Produk</label>
      <input type="text" class="form-control" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Keterangan</label>
      <input type="text" class="form-control" name="keterangan" value="<?php echo $row['keterangan']; ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Harga</label>
      <input type="text" class="form-control" name="harga" value="<?php echo $row['harga']; ?>" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Jumlah</label>
      <input type="text" class="form-control" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Ubah</button>
</form>
</div>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>