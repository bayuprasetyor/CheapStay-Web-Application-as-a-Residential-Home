<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'koneksi.php';
extract($_POST);
$query = "update pemesan set terbayar ='$bayar' where id='$id' ";
mysqli_query($konek_db,$query);
header("location:daftar_bayar.php");

