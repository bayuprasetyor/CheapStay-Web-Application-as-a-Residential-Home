<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel  A Hotel category Flat bootstrap Responsive  Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<?php
  session_start();
  include_once('koneksi.php');
?>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo2.png"style="height: 40px; width: 200px " alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="index.php">Home</a></li>
						    	<li><a href="rooms2.php">Rooms</a></li>
                  <?php
                  include "koneksi.php";    
                  $query="select * from user" ;  
                  $hasil=mysqli_query($konek_db,$query);              
                  $data = mysqli_fetch_assoc ($hasil);
                  if(isset($_SESSION['is_logged_in'])){ 
                  if($_SESSION['level']==2){
                    echo "<li><a href='booking.php'>Daftar Booking</a></li>";
                  } 
                  if($_SESSION['level']==1){
                    echo "<li><a href='history.php'>history</a></li>";
                  }                 
                  }
                  ?>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>					
	    		    <div class="clearfix"></div>
	    	    </div>
          <?php
          include "koneksi.php";    
          $query="select * from user" ;  
          $hasil=mysqli_query($konek_db,$query);              
          $data = mysqli_fetch_assoc ($hasil);                
          if(isset($_SESSION['is_logged_in'])){
            if($_SESSION['level']==1){
            echo "
              <div class='col-sm-4 header_right'>
                <div id='loginContainer'><a href='#' id='loginButton'><img src='images/login.png'><span>Selamat datang ".$_SESSION['user']."</span></a>
                <a href='logout.php' id='loginButton'><span>Logout</span></a>
               </div>
              <div class='clearfix'></div>
              </div>

            ";}
            else{
              echo "
              <div class='col-sm-4 header_right'>
                <div id='loginContainer'><a href='#' id='loginButton'><img src='images/login.png'><span>Selamat datang ".$_SESSION['admin']."</span></a>
                <a href='logout.php' id='loginButton'><span>Logout</span></a>
               </div>
              <div class='clearfix'></div>
              </div>

            ";}              
            }
          
          else{
            echo "
              <div class='col-sm-4 header_right'>
                <div id='loginContainer'>
                    <a href='#' data-toggle='modal' data-target='#myModal4'><img src='images/login.png'><span>Login</span></a>
                    <a href='#' data-toggle='modal' data-target='#myModal5'><img src='images/login.png'><span>register</span></a>


               </div>

              <div class='clearfix'></div>
              </div>

            ";

          }
          ?>
	                    <div class="clearfix"></div>
   </div>
   <!--single start here-->
		 <div class="single">
			<div class="container">
			<div class="services-top heading">
				<h2>Data Pemesanan Penginapan</h2>
			</div>

			<div class="services-bottom">
				<div class="col-md-6 services-left">
					<div class="services-one">
						<?php
							$username = $_SESSION['user'];
							$nama = $_SESSION['nama'];
							$username = $_SESSION['user'];
							$email = $_SESSION['email'];
							$no = $_SESSION['no'];
							$level = $_SESSION['level'];
							$id_user = $_SESSION['id_user'];
							$id = $_SESSION['id'];							
						if(isset($_SESSION['is_logged_in'])){
							?>
						<form action="booking_proses.php" method="post">
							<input type="hidden" name="id" ><br>
							<h5>Nama</h5>
	                    	<input type="text" class="form-control required" name="nama" placeholder="Nama" value="<?php echo $nama;?>"><br>
	                    	<h5>Nomor Telepon</h5>
	                		<input type="text" class="form-control required" name="nomor" placeholder="Nomor Telepon"value="<?php echo $no;?>"><br>
	                		<h5>Email</h5>
	                		<input type="email" class="form-control required" name="email" placeholder="Email"value="<?php echo $email;?>"><br>
	                		<h5>Permintaan Khusus</h5>
	                		<textarea class="form-control required" name="permintaan" rows="8" placeholder="permintaan" aria-required="true">
	                		</textarea><br>
	                		<h5>ExtraBed</h5>
	                		<select name="extrabed">
	                			<option value="1">1</option>
	                			<option value="2">2</option>
	                			<option value="3">3</option>
	                			<option value="4">4</option>
	                		</select><br><br>
	                		<input type="submit" value="Book Now">
	        			</form>
	        			<?php
						}
						else{ ?>
						<form action="booking_proses.php" method="post">
							<input type="hidden" name="id" ><br>
							<h5>Nama</h5>
	                    	<input type="text" class="form-control required" name="nama" placeholder="Nama"><br>
	                    	<h5>Nomor Telepon</h5>
	                		<input type="text" class="form-control required" name="nomor" placeholder="Nomor Telepon"><br>
	                		<h5>Email</h5>
	                		<input type="email" class="form-control required" name="email" placeholder="Email"><br>
	                		<h5>Permintaan Khusus</h5>
	                		<textarea class="form-control required" name="permintaan" rows="8" placeholder="permintaan" aria-required="true">
	                		</textarea><br>
	                		<h5>ExtraBed</h5>
	                		<select name="extrabed">
	                			<option value="1">1</option>
	                			<option value="2">2</option>
	                			<option value="3">3</option>
	                			<option value="4">4</option>
	                		</select><br><br>
	                		<input type="submit" value="Book Now">
	        			</form>
	        			<?php

						}
	                	?>

	        		</div>
						<div class="clearfix">
						</div>
				</div>


				<div class="col-md-6 services-left">
					<div class="services-one">
						<h2>Rincian Pemesanan HomeStay</h2>
						<?php
				            include 'konfig.php';
				            $id = $_GET['id'];
				            $jenis = $_GET['jenis'];
				            $in = $_GET['in'];
				            $out = $_GET['out'];
				            $jumlah = $_GET['jumlah'];
				            $_SESSION['id']=$_GET['id'];
				            $_SESSION['jenis']=$_GET['jenis'];
				            $_SESSION['in']=$_GET['in'];
				            $_SESSION['out']=$_GET['out'];
				            $_SESSION['jumlah']=$_GET['jumlah'];
                    	?>
						<table style="margin: 20px;">
							<tr>
								<th>Check-in</th>
								<td style="padding-left:70px;">: <?php echo $in; ?></td>
							</tr>
							<tr>
								<th>Check-out</th>
								<td style="padding-left:70px;">: <?php echo $out; ?></td>
							</tr>
							<tr>
								<th>Jumlah Kamar</th>
								<td style="padding-left:70px;">: <?php echo $jumlah; ?></td>
							</tr>
							<tr>
								<th>Tipe Penginapan</th>
								<td style="padding-left:70px;">: 
								<?php
								if($jenis == 1){
									echo "Rumah Tradisional";	
								} 
								else if($jenis == 2){
									echo "Rumah Warga";	
								}
								else{
									echo "HomeStay";
								}  
								?>
								</td>
							</tr>
						</table>
						<h2>Rincian Harga</h2>
						<table style="margin: 20px;">
							<tr>
							<?php
								$start = new DateTime($in);
								$end = new DateTime($out);
								$interval = $start->diff($end);
								$harga = $_GET['harga'];
								$_SESSION['harga']=$_GET['harga'];
								$total = $harga * $interval->d;
								$_SESSION['total']=$total;
							?>
								<th>Harga Kamar</th>
								<td style="padding-left:70px;">: Rp.<?php echo $total ?></td>
							</tr>
							<tr>
								<th>Harga Extrabed</th>
								<td style="padding-left:70px;">:<input type="text" name="harga" id="harga" disabled style="border: 0; background: transparent;"></td>
							</tr>
							<tr>
								<th>Total Bayar</th>
								<td style="padding-left:70px;">:<input type="text" name="harga" id="harga" disabled style="border: 0; background: transparent;"></td>
						</table>
						 
					</div>
				</div>			
			</div>			
			</div>
	</div>

<!--//single end here-->
   <div class="footer">
   	<div class="container">
	  <div class="footer_grids">
	     <div class="col-md-6" >
			<h2>Information</h2>
         <div class="strip"></div>

			<p> CheapStay merupakan sebuah aplikasi berbasis web yang menawarkan penginapan kepada wisatawan yang berupa rumah
            warga dan rumah tradisional. Aplikasi ini memungkinkan wisatawan memilih sendiri penginapan sesuai dengan fasilitas yang diinginkannya. 
         </p>
         <div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2017 CheapStay. All rights reserved</p>
           </div>
		  </div>
		  <div class="footer-grid last_grid" style="padding-left: 70px;">
			<h2>Follow Us</h2>
         <div class="strip"></div>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		