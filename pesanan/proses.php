<?php
#1. koneksikan file ini
include("../koneksi.php");
#2. mengambil value dari form
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
#3. Menulis query
$simpan = "INSERT INTO pesanans (nama_pelanggan, produk, jumlah, tgl_pesan) VALUES ('$nama','$produk','$jumlah','$tanggal')";
#4. Jalankan query
$proses = mysqli_query($koneksi, $simpan);
?>

<!-- 5. Mengalihkan halaman -->
<script>
    document.location="index.php";
</script>