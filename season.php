<?php
session_start();
 
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'cheapstay';  
 
  $konek_db = mysqli_connect($host, $user, $password,$database);
 
  $find_db = mysqli_select_db($konek_db,$database) ;
	$in = $_GET["in"];
	$out = $_GET["out"];
	$jumlah = $_GET["jumlah"];
	$jenis = $_GET["jenis"];
	$lokasi = $_GET["lokasi"];


			$_SESSION['in']=$in;
			$_SESSION['out']=$out;
			$_SESSION['jumlah'] = $jumlah;
			$_SESSION['jenis'] = $jenis;
			$_SESSION['lokasi'] = $lokasi;
			header("Location: rooms.php?jenis=" . $_SESSION['jenis'] . "&in=" . $_SESSION['in'] . "&out=" . $_SESSION['out'] . "&jumlah=" . $_SESSION['jumlah'] . "&lokasi=" . $_SESSION['lokasi'] . "");

?>
