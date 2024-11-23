<?php
#1. koneksi ke database
include("../koneksi.php");
#2. ambil id yang akan di edit
$id = $_GET['id'];
#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM pesanans WHERE id='$id'";
#4. menjalankan query
$edit = mysqli_query($koneksi, $ambil);
#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php
include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data Pesanan</h3>
            </div>
            <div class="card-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <input name="id" type="hidden" value="<?=$data['id']?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" readonly value="<?=$data['nama_pelanggan']?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Produk</label>
                        <input type="text" value="<?=$data['produk']?>" name="produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                        <input type="text" value="<?=$data['jumlah']?>" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" value="<?=$data['tgl_pesan']?>" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-info btn-sm">Update</button>
                    <a class="btn btn-info btn-sm" href="index.php">Kembali</a>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>