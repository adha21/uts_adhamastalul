<?php
#1. koneksikan file ini
include("../koneksi.php");
#2. mengambil id dari tombol hapus
$id = $_GET['xyz'];
#3. Menulis query
$hapus = "DELETE FROM pesanans WHERE id='$id'";
#4. Jalankan query
$proses = mysqli_query($koneksi, $hapus);
?>

<!-- 5. Mengalihkan halaman -->
<script>
    document.location="index.php";
</script>