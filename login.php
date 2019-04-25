<?php
session_start();
 
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'cheapstay';  
 
  $konek_db = mysqli_connect($host, $user, $password,$database);
 
  $find_db = mysqli_select_db($konek_db,$database) ;
  

if(isset($_POST['login'])){
	$username =$_POST['username'];
 
	$sql = mysqli_query($konek_db,"SELECT * FROM user WHERE username='$username'") or die(mysql_error());
	if(mysqli_num_rows($sql) == 0){
		echo '<script language="javascript">alert("user tidak ditemukan"); document.location="index.php";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['user']=$username;
			$_SESSION['level']=1;
			$_SESSION['nama']=$row['nama'];
			$_SESSION['email']=$row['email'];
			$_SESSION['no']=$row['no'];
			$_SESSION['level']=1;
			$_SESSION['id_user']=$row['id'];
			$_SESSION['is_logged_in'] = TRUE;
			header("Location: index.php");
		}else{
			$_SESSION['admin']=$username;
			$_SESSION['level']=1;
			$_SESSION['nama']=$row['nama'];
			$_SESSION['email']=$row['email'];
			$_SESSION['no']=$row['no'];
			$_SESSION['level']=2;
			$_SESSION['id_user']=$row['id'];
			$_SESSION['is_logged_in'] = TRUE;
			header("Location: index.php");;
		}
	}
}
else{
	echo "assss";
}
?>
