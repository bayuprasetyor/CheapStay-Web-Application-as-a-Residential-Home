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
			<div class="col-md-6 sing">
				<div class=" single-grid">
					<div class="lone-line">
					<?php
			            include 'koneksi.php';
			            $id = $_GET['id'];
			            $query = "SELECT * FROM penginapan where id = $id";
			            $_SESSION['id']=$_GET['id'];
			            $result = mysqli_query($konek_db,$query);
			            if (mysqli_num_rows($result)>0) {
			            	while ($row = mysqli_fetch_array($result)){
			            		?>
			            		<h1><?php echo $row['nama']; ?></h1>
			            <div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i>22.08.2014</span></li>
							</ul>
						</div>
						<h2><br> Fasilitas</h2>
						<p><?php echo $row['fasilitas']; ?></p>
						<h2>Info Penginapan</h2>
						<p>Alamat : <?php echo $row['alamat']; ?> <br> Harga  : Rp <?php echo $row['harga']; ?></p>
					</div>
			        <?php 
			        if(isset($_SESSION['is_logged_in'])){
			        echo"
							<a class='btn3' href='pembayaran.php?&id=" . $row['id'] . "&jenis=" . $_SESSION['jenis'] . "&in=" . $_SESSION['in'] . "&out=" . $_SESSION['out'] . "&jumlah=" . $_SESSION['jumlah'] . "&harga=" . $_SESSION['harga'] . "' >Pesan Sekarang</a>
			        ";
			    	}
			    	else{
			    	echo"
			    		<a href='#' class='btn3' data-toggle='modal' data-target='#myModal4'>Pesan Sekarang</a>
			    	";
			    	}
			        ?>
			        

				</div>
			</div>
			<div class="col-md-6 sing">
				<div class=" single-grid">
					<img class="img-responsive" src="<?php echo $row['gambar']; ?>" alt=""  class="img-responsive">
				</div>
			</div>
			</div>
			<div class="container" style="padding-top: 25px;">
				<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				    <img src="<?php echo $row['gambar']; ?>" class="img-responsive" alt=""/>
					<div class="living_desc">
					<h4 style="text-align: center;"><br> Kamar Mandi</h4>
					</div>
				</div>
	   	     	<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				    <img src="<?php echo $row['gambar']; ?>" class="img-responsive" alt=""/>
					<div class="living_desc">
					<h4 style="text-align: center;"><br> Tempat Tidur</h4>
					</div>
				</div>
	   	     	<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
				    <img src="<?php echo $row['gambar']; ?>" class="img-responsive" alt=""/>
					<div class="living_desc">
					<h4 style="text-align: center;"><br> Kasur</h4>
					</div>
				</div>
			</div>
	</div>					
			            		<?php
			            	
			            	} 
			            }
			            else {
			                echo"kosong";
			            }
			            ?>
						
						


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
   <!-- login -->
      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
            <div class="modal-body modal-spa">
              <div class="login-grids">
                  
                  <div class="login-right">
                    <h3>Sign in with your account</h3>
                    <form action="login.php" method="post">
                      <div class="sign-in">
                        <h4>Username :</h4>
                        <input type="text" placeholder='Username' name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">  
                      </div>
                      <div class="sign-in">
                        <h4>Password :</h4>
                        <input type="password" placeholder='Password'name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
                      </div>

                      <div class="sign-in">
                        <input type="submit" name = "login" value="login" >
                      </div>
                      <h4>Belum punya akun? <a href="#" data-toggle="modal" data-target="#myModal5"> Daftar Disini</a> </h4>                      
                    </form>
                  </div>
                  
                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- //login -->
<!-- login -->
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
            <div class="modal-body modal-spa">
              <div class="login-grids">
                  <div class="login-bottom">
                    <h3>Sign up for free</h3>
                    <form action="register.php" method="post">
                      <div class="sign-up">
                        <h4>Username :</h4>
                        <input type="text" placeholder='username' name="username" id="username"value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black"> 
                      </div>
                      <div class="sign-up">
                        <h4>Password :</h4>
                        <input type="password" placeholder='password' name="password" value="" id="password"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
                      </div>
                      <div class="sign-up">
                        <h4>Re-type Password :</h4>
                        <input type="password" placeholder='password'value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
                      </div>
                      <div class="sign-up">
                        <h4>Nama :</h4>
                        <input type="text" placeholder='Nama' name="nama"value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black"> 
                      </div>
                      <div class="sign-up">
                        <h4>Nomor Telephon :</h4>
                        <input type="text" placeholder='Nomor Telephon' name="no" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black"> 
                      </div>
                      <div class="sign-up">
                        <h4>email :</h4>
                        <input type="text" placeholder='email' name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black"> 
                      </div>
                      <div class="sign-up">
                        <input type="submit" value="REGISTER NOW" >
                      </div>
                      
                    </form>
                  </div>
                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- //login -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>		