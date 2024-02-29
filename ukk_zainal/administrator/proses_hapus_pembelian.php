<?php

include "../koneksi.php";


$PelangganID = $_POST['PelangganID'];


mysqli_query($koneksi,"DELETE FROM pelanggan where PelangganID='$PelangganID'");
mysqli_query($koneksi,"DELETE FROM penjualan where PelangganID='$PelangganID'");


header("location:pembelian.php?pesan=hapus");

?>