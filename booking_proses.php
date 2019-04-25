<?php
include "koneksi.php";
session_start();

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST["nama"];
$email = $_POST["email"];
$extrabed = $_POST["extrabed"];
$nomor = $_POST["nomor"];
$permintaan = $_POST["permintaan"];
$total = $_SESSION['total'];
$id_hotel= $_SESSION['id'];
$id_user = $_SESSION['id_user'];
			$_SESSION['id']=$id;
			$_SESSION['total']=$out;
			$_SESSION['nama'] = $nama;
			$_SESSION['nomor'] = $nomor;
// perintah SQL
$query="insert into pemesan values ('','$nama','$nomor','$email','$permintaan','$extrabed','$total','','','$id_user','$id_hotel') " ;
$hasil=mysqli_query($konek_db,$query);
if ($hasil){
	
header("Location: bukti.php?&nama=" . $nama . "&total=" . $total . "&nomor=" . $nomor . "");

} 
else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= index.php'/> ";
}
?>