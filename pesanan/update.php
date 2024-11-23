<?php
#1. koneksikan file ini
include("../koneksi.php");
#2. mengambil value dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
#3. Menulis query
$sunting = "UPDATE pesanans SET nama_pelanggan='$nama',produk='$produk',jumlah='$jumlah',tgl_pesan='$tanggal' WHERE id='$id'";
#4. Jalankan query
$proses = mysqli_query($koneksi, $sunting);
?>

<!-- 5. Mengalihkan halaman -->
<script>
    document.location="index.php";
</script>