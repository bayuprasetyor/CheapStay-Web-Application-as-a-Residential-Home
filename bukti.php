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
						    	<li><a href="index.php">Home</a></li>
						    	<li><a href="rooms.php">Rooms</a></li>
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
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
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
                <div id='loginContainer'><a href='#' id='loginButton'><img src='images/login.png'><span>Login</span></a>
                <div id='loginBox'>                
                    <form action='login.php' method='post' id='loginForm'>
                            <fieldset id='body'>
                              <fieldset>
                                      <label for='email'>Username</label>
                                      <input type='text' placeholder='Username' name='username' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' required=''style='color: black'>
                                </fieldset>
                                <fieldset>
                                        <label for='password'>Password</label>
                                        <input type='password' placeholder='Password'name='password' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' required=''style='color: black'>
                                 </fieldset>
                                <input type='submit' name = 'login' id='login' value='login'>
                              <label for='checkbox'><input type='checkbox' id='checkbox'> <i>Remember me</i></label>
                          </fieldset>
                             <span><a href='#'>Forgot your password?</a></span>
                    </form>
                  </div>
               </div>

              <div class='clearfix'></div>
              </div>

            ";

          }
          ?>

		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
   <!--single start here-->
		 <div class="single">
			<div class="container">
				<div>
					<div class=" single-grid">
						<div class="lone-line">
						<?php
				            include 'koneksi.php';
				            $nama = $_GET['nama'];
				            $nomor = $_GET['nomor'];
				            $total = $_GET['total'];
				            $query = "SELECT * FROM pemesan where nama = '$nama' and nomor='$nomor'";
				            $result = mysqli_query($konek_db,$query);
				            if (mysqli_num_rows($result)>0) {
				            	while ($row = mysqli_fetch_array($result)){
				            		?>
				            		<h1>Pemesanan Anda Telah Diterima</h1>

							<h3>
								<br> Dear <?php echo $row['nama']; ?> <br>
									Terima kasih sudah melakukan pemesanan kamar di CheapStay. Berikut informasi detail tentang pemesanan Anda.<br>
							</h3>
							<table border = 1>
								<tr>
									<td>
										<h3>Id Pemesanan : <?php echo $row['id']; ?></h3><br>
										<h3>Status Pembayaran </h3><br>
									</td>
								</tr>
								<tr>
									<td>
										<h3>Metode Pembayaran : Bank Transfer (Bank Mandiri)</h3><br>
										<h3>Jumlah Tagihan : Rp.<?php echo $total; ?></h3><br>
									</td>
								</tr>
							</table>
						<?php
			            	
			            	} 
			            }
			            else {
			                echo"kosong";
			            }
			            ?>
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