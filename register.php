
<?php
session_start();
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'cheapstay';  
 
  $konek_db = mysqli_connect($host, $user, $password,$database);
 
  $find_db = mysqli_select_db($konek_db,$database) ;

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$no = $_POST["no"];
$level = 1;

// perintah SQL
$query="INSERT into user values ('$nama','$username','$email','$password','$level','','$no') " ;

$hasil=mysqli_query($konek_db,$query);

if ($hasil){
$_SESSION['is_logged_in'] = TRUE;
			$_SESSION['user']=$username;
			$_SESSION['nama']=$nama;
			$_SESSION['user']=$username;
			$_SESSION['email']=$email;
			$_SESSION['no']=$no;
			$_SESSION['level']=$level;
echo " <center> <b> <font color = 'green' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} 
else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= index.php'/> ";
}
?>