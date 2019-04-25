<!DOCTYPE HTML>
<html>
<head>
<title>Hotel  A Hotel category Flat bootstrap Responsive  Website Template | Rooms :: w3layouts</title>
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
						    	<li class="active"><a href="rooms2.php">Rooms</a></li>
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
								<div class="clearfix"> </div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>		
	    		    <div class="clearfix"> </div>
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
	                <div class="clearfix"> </div>
    </div>
   <div class="living_middle">
			
   	  <div class="container">
   	  		<h2 class="title block-title">Penginapan yang tersedia</h2>
			<?php
				  include "koneksi.php";    
				  $query="select * from user" ;  
				  $hasil=mysqli_query($konek_db,$query);              
				  $data = mysqli_fetch_assoc ($hasil);
					if(isset($_SESSION['is_logged_in'])){ 
							if($_SESSION['level']==2){ ?>
								<div align="center">
								<?php echo "<a class='btn btn-primary btn-large' href='tambah_penginapan.php'><i class='glyphicon glyphicon-plus-sign'></i>Tambah Penginapan baru</a>"; ?>
								 <br>
								 <br>
								 <br>
								</div>
							<?php
							}               
					}
			?>
   	  	<?php
		require_once("konfig.php");
		class DisplayImageFromDatabase{
    		function displayImage(){
        	$connection = new Connection();
        	$conn = $connection->getConnection();
        try{

            $sqlQuery = "SELECT * FROM penginapan";
            $getImage = $conn->prepare($sqlQuery);
            $getImage->execute();
            
            $result = $getImage->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($result as $data){ ?>

   	  	<!-- Contoh -->
   	  	<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   	    	<div class="living_box"><a href="#">
   	    		<img src="<?php echo $data['gambar']?>"  class="img-responsive" alt="" style="margin-right:7px;width: 400px;height: 250px"/>
				<span class="sale-box">
				  <span class="sale-label">Rooms</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3>
					<a href="#"><?php echo $data['nama']; ?></a>
				</h3>
				<p><?php echo $data['keterangan']; ?></p>
				<a href="single.php" class="btn3">Rent</a>
				<p class="price">Rp. <?php echo $data['harga']; ?></p>
				</div>
			    <table border="1" class="propertyDetails">

                <tbody><tr>

                	<!--trying-->
                   <td>
                   	<img src="images/area.png" alt="" style= "margin-right:7px;"> <?php echo $data['luas']; ?> m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;"><?php echo $data['jumlah_bed']; ?> Beds</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;"><?php echo $data['jumlah_bath']; ?> Baths</td>
                    </tr>
                </tbody></table>
			</div>
		 </div>


		<?php 
            	}
        		}catch (PDOException $e){
           		 echo "Error while displaying image : " . $e->getMessage();
        		}
    		}
		}
$displayImage = new DisplayImageFromDatabase();
$displayImage->displayImage();
	?>

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
</body>
</html>