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
            $( "#datepicker,#datepicker1" ).datepicker();
         });
      </script>
<!--/End-date-piker-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                });
            </script>

<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

<?php
  session_start();
  include_once('koneksi.php');
?>
<style >
*{
 margin: 0 auto;
 padding: 0;
 font-family: Helvetica;
 box-sizing: border-box;
}

table {border:1px solid #0088FF; border-collapse: collapse; box-shadow: 0px 2px 5px silver;}
table thead{background: #0088FF; color: white;    border-bottom: 4px solid #006fd0;}
table th,td {padding: 20px;}
table tr:nth-child(2n){
 background-color: #ededed;
}

</style>
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
                    echo "<li><a href='daftar_bayar.php'>Daftar Pembayaran</a></li>";
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

   <!--start-banner-->
   
            <h1 style="color: black">Booking Penginapan Murah Impian Anda Sekarang</h1>
            <div class="banner-bottom">
               <?php
if (isset($_GET)) {
    include 'koneksi.php';
    $id_ubah = $_GET['id'];
    $query = "SELECT * FROM pemesan where id = '$id_ubah'";
    $result = mysqli_query($konek_db,$query);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
?>

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Konfirmasi Pembayaran</h4>
            </div> 
            
			<div class="modal-body">
                <form name="ubah_pembayaran" id="ubah_pembayaran" method="POST" action="aksi_ubah_pembayaran.php ">
					<div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i style="font-size: 25px;"><b>Nomor Pembayaran</b></i>
                        </span>
                        <input type="text" style="font-size: 25px;" name="id" placeholder="Nomor" value="<?php echo $row['id']?>" class="form-control input-lg" readonly required />
                    </div>
					
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="hidden" value="<?php echo $id_ubah; ?>" name="id_pembayaran" />
                        <input type="hidden" value="<?php echo $row['id_pemesan']; ?>" name="id_pemesan" id="id_pemesan_hidden" />
                        <input type="text" value="<?php echo $row['nama']; ?>" name="search" class="search form-control input-lg" id="searchid" placeholder="Masukan ID / Nama Pemesan" readonly required autocomplete="off" />
                        <div id="result"></div>
                    </div>
					
					<!--
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <input type="date" id="tanggal_checkin" name="tanggal_checkin" placeholder="Tanggal Check In" value="<?php echo $row['tanggal_checkin']?>" class="form-control input-lg" required style="width: 50%;" />
                        <input type="date" id="tanggal_checkout" name="tanggal_checkout" placeholder="Tanggal Check Out" value="<?php echo $row['tanggal_checkout']?>" class="form-control input-lg" required style="width: 50%;"/>
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                    </div> -->

                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="nomor" placeholder="Nomor" value="<?php echo $row['nomor']?>" class="form-control input-lg" readonly required />
                    </div>
                    <div align="center">
                        <button type="button" id="btn_cek_tarif" class="btn btn-success">&nbsp; Data Harga</button>
                    </div>
                    <div class="input-group input-lg">
						<span class="input-group-addon" style="font-size: 20px;">Total Harga</span>
                        <span class="input-group-addon" style="font-size: 25px;"><b>Rp</b></span>
                        <input type="text" id="biaya" name="biaya" placeholder="Biaya" class="form-control input-lg" value="<?php echo $row['total']?>" readonly required style="font-size: 25px;" />
                        <span class="input-group-addon">,-</span>
                    </div>
                    <div class="input-group input-lg">
						<span class="input-group-addon" style="font-size: 20px;">Total Bayar</span>
                        <span class="input-group-addon" style="font-size: 25px;"><b>Rp</b></span>
                        <input type="text" name="bayar" placeholder="Terbayar" class="form-control input-lg" value="<?php echo $row['terbayar']?>" required autofocus style="font-size: 25px;" />
                        <span class="input-group-addon">,-</span>
                    </div>  
                    <div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>

            </div>
			
			<?php
        }
    }
}
?>
            </div>
      </div>

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
   <!--end-events-->
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
   		  <div class="offering">
   		  	  <h2>What can Hotel Deluxe offer to you ?</h2>
   		  	  <h3>Ut wisi enim ad minim veniam, quis</h3>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		   </div>
   		  </div>
   	  </div>
   </div>
   <div class="footer">
   	<div class="container">
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
				<li><a href="#">Claritas</a></li>
				<li><a href="#">Mirum est</a></li>
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
              <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		