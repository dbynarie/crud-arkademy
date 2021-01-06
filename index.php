<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="main.js"></script>
</head>
<body>
<div class="container">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                <div class="col-sm-6">
                                        <h2>Data <b>Produk</b></h2>
                                </div>
                                <div class="col-sm-6">
                                        <a href="./form-input.php" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Data Produk</span></a>   
                                </div>
                        </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                        <center>
                                <thead class="bg-primary">
                                        <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Produk</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Harga</th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Aksi</th>
                                        </tr>
                                </thead>
                        </center>
                        <tbody class="text-center">
                                <tr>
                                        <?php
                                        include 'koneksi.php';
                                        $produk = mysqli_query($koneksi, "SELECT * from produk");
                                        $no = 1;
                                        foreach ($produk as $row) {
                                                echo "<tr>
                                                <td>$no</td>
                                                <td>" . $row['nama_produk'] . "</td>
                                                <td>" . $row['keterangan'] . "</td>
                                                <td>" . $row['harga'] . "</td>
                                                <td>" . $row['jumlah'] . "</td>
                                                <td>
                                                <a href='form-edit.php?id_produk=$row[id_produk]' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                                                <a href='delete.php?id_produk=$row[id_produk]' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td>
                                                </tr>";
                                                $no++;
                                        }
                                        ?>
                                </tr>
                        </tbody>
                </table>
                </body>
        </html>                                                                    
