<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>CheapStay</title>
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
<script src="js/jquery.easydropdown.js"></script>
<!--Animation-->
<!--start-date-piker-->
   <script src="js/jquery-ui.js"></script>
      <script>
         $(function() {
            $( "#datepicker,#datepicker1" ).datepicker({dateFormat:'yy-mm-dd'});
         });
      </script>
<!--/End-date-piker-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
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
					echo "<li><a href='daftar_bayar.php'>Daftar Pembayaran</a></li>";
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

   <!--start-banner-->
   <div class="banner">
      <div class="container">
         <div class="banner-top">
            <h1 style="color: black">Booking Penginapan Murah Impian Anda Sekarang</h1>
            <div class="banner-bottom">
            <form action="season.php">
               <div class="bnr-one">
                  <div class="bnr-left">
                     <p>Check In</p>
                  </div>
                  <div class="bnr-right">
                     <input class="date" id="datepicker" name="in" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="bnr-one">
                  <div class="bnr-left">
                     <p>Check Out</p>
                  </div>
                  <div class="bnr-right">
                     <input class="date" id="datepicker1" name="out"type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="bnr-one">
                  <div class="bnr-left">
                     <p>Jumlah Kamar</p>
                  </div>
                  <div class="bnr-right">
                     <select name="jumlah"> 
                        <option  class="rm" value="0">0</option>
                        <option  class="rm" value="1">1</option>
                        <option  class="rm" value="2">2</option>
                        <option  class="rm" value="3">3</option>
                        <option  class="rm" value="4">4</option>
                        <option  class="rm" value="5">5</option>
                        <option  class="rm" value="6">6</option>
                        <option  class="rm" value="7">7</option>
                        <option  class="rm" value="8">8</option>
                        <option  class="rm" value="9">9</option>
                     </select>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="bnr-one">
                  <div class="bnr-left">
                     <p>Tipe Penginapan</p>
                  </div>
                  <div class="bnr-right">
                     <select name="jenis">
                        <option value="0">Pilih Tipe Penginapan</option>
                        <option value="1">Rumah Tradisional</option>
                        <option value="2">Rumah Warga</option>
                        <option value="3">HomeStay</option>
                     </select>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="bnr-one">
                  <div class="bnr-left">
                     <p>Lokasi Wisata</p>
                  </div>
                  <div class="bnr-right">
                     <select name="lokasi">
                        <option value="0">Pilih Lokasi Wisata</option>
                        <option value="1">Toba Samosir</option>
                        <option value="2">Samosir</option>
                        <option value="3">Parapat</option>
                     </select>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="bnr-btn">
                  
                     <input type="submit" value="Book Now" name="submit">
                  
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--end-banner-->
   <!---start-date-piker---->
      <link rel="stylesheet" href="css/jquery-ui.css" />
      <script src="js/jquery-ui.js"></script>
         <script>
            $(function() {
            $( "#datepicker,#datepicker1" ).datepicker({dateFormat:'yy-mm-dd'});
            });
         </script>
   <!---/End-date-piker---->

   <!--FlexSlider-->
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <script defer src="js/jquery.flexslider.js"></script>
   <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
      });
      </script>
   </div>
   <!--End-slider-script-->


   <!--start-events-->
   <div class="events" id="events">
      <div class="container">
         <div class="events-top heading">
            <h3>Lokasi Wisata</h3>
         </div>
         <div class="events-bottom">
            <div class="col-md-4 events-main">
               <div class="events-left">
                  <img src="images/e-1.jpg" alt="" />
                  <div class="event-btm" style="padding-left: 30px;" >
                     <h4 >Samosir</h4>
                  </div>
                  <p>Pulau ini merupakan sebuah pulau vulkanik di tengah Danau Toba, sebuah pulau dalam pulau yang terpisah dari daratan Sumatera. Kekayaan obyek wisata di pulau Samosir tidak hanya pada panorama Danau Toba dan gunung di sekitarnya, tetapi objek wisata budaya.</p>
               </div>
            </div> 
            <div class="col-md-4 events-main">
               <div class="events-left">
                  <img src="images/e-2.jpg" alt="" />
                  <div class="event-btm" style="padding-left: 30px;">
                     <h4>Parapat</h4>
                  </div>
                  <p>Pulau ini merupakan sebuah pulau vulkanik di tengah Danau Toba, sebuah pulau dalam pulau yang terpisah dari daratan Sumatera. Kekayaan obyek wisata di pulau Samosir tidak hanya pada panorama Danau Toba dan gunung di sekitarnya, tetapi objek wisata budaya.</p>
               </div>
            </div>
            <div class="col-md-4 events-main">
               <div class="events-left">
                  <img src="images/e-3.jpg" alt="" />
                  <div class="event-btm">
                     <h4>Toba Samosir</h4>
                  </div>
                  <p>Pulau ini merupakan sebuah pulau vulkanik di tengah Danau Toba, sebuah pulau dalam pulau yang terpisah dari daratan Sumatera. Kekayaan obyek wisata di pulau Samosir tidak hanya pada panorama Danau Toba dan gunung di sekitarnya, tetapi objek wisata budaya.</p>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   
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