<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Deluxe  A Hotel category Flat bootstrap Responsive  Website Template | Gallery :: w3layouts</title>
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
<!------ Light Box ------>
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!------ Eng Light Box ------>	
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
						    	<li><a href="index.php">Home</a></li>
						    	<li><a href="rooms.php">Rooms</a></li>
						    	<li><a href="news.php">News</a></li>
						    	<li class="active"><a href="gallery.php">Gallery</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
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
	            <div class="col-sm-4 header_right">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						                 <span><a href="#">Forgot your password?</a></span>
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
   <div class="living_middle">
   	  <div class="container">
   	    <div class="entertain_box wow fadeInLeft" data-wow-delay="0.4s">
   	    	<h2>All About Travelling with CheapStay</h2>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p1.jpg" class="swipebox"  title="Image Title"> <img src="images/p1.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p2.jpg" class="swipebox"  title="Image Title"> <img src="images/p2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p3.jpg" class="swipebox"  title="Image Title"> <img src="images/p3.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#"> Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p4.jpg" class="swipebox"  title="Image Title"> <img src="images/p4.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>	
		 <div class="entertain_box1 wow fadeInRight" data-wow-delay="0.4s">
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p5.jpg" class="swipebox"  title="Image Title"> <img src="images/p5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p6.jpg" class="swipebox"  title="Image Title"> <img src="images/p6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p7.jpg" class="swipebox"  title="Image Title"> <img src="images/p7.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p> voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p8.jpg" class="swipebox"  title="Image Title"> <img src="images/p8.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="entertain_box1 wow fadeInRight" data-wow-delay="0.4s">
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p5.jpg" class="swipebox"  title="Image Title"> <img src="images/p5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p6.jpg" class="swipebox"  title="Image Title"> <img src="images/p6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p7.jpg" class="swipebox"  title="Image Title"> <img src="images/p7.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p> voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="col-md-3 grid_box">
		   	   <a href="images/p8.jpg" class="swipebox"  title="Image Title"> <img src="images/p8.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4><a href="#">Hotel</a></h4>
			   <p>voluptatem sequi</p>
	          </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>	
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
</div>
</body>
</html>		