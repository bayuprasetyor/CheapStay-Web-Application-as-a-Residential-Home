 <?php
 
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'cheapstay';  
 
  $konek_db = mysqli_connect($host, $user, $password,$database);
 
  $find_db = mysqli_select_db($konek_db,$database) ;
?>