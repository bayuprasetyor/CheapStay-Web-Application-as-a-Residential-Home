<?php
include 'koneksi.php';
extract($_POST);
$query = "insert into penginapan values(null,'$nama','$harga', '$jenis', '$gambar','$gambar_bed', '$gambar_bath', '$gambar_kamar', '$keterangan', '$luas', '$jumlah_bed', '$jumlah_bath', '$fasilitas', '$alamat') ";
mysqli_query($konek_db,$query);
header("location:rooms2.php");