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
				?>

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i>Tambah Data Penginapan Baru</h4>
            </div> 
            
			<div class="modal-body">
                <form name="tambah_penginapan" id="tambah_penginapan" method="POST" action="aksi_tambah_penginapan.php ">
                    <table width="900">
					<tr>
						<td>Nama Penginapan</td>
						<td><div class="input-group input-lg">
							<input type="text" name="nama" placeholder="" class="form-control" required autofocus/>
						</div></td>
					</tr>
					<tr>
					<td><span>Harga Penginapan</span></td>
						<td><div class="input-group input-lg">
							<input type="text" name="harga" placeholder="" class="form-control" />
						</div></td>
					</tr>
					<tr>
					<td> Jenis Penginapan </td>
					<td>
					<div class="input-group input-lg">
                        <select name="jenis" class="form-control" placeholder="" >
							<option value = "1">Rumah Tradisional</option>
							<option value = "2">Rumah Warga</option>
							<option value = "3">HomeStay</option>
						</select>
						
                    </div>
					</td>
					</tr>
					
					<tr>
					<td>Gambar Penginapan</td>
					<td>
					<div class="input-group input-lg">
                        <input type="file" name="gambar" id="preview_gambar" accept="image/*" class="form-control" />
						<img align="center" src="#" id="gambar_nodin" width="200" height='200' alt="" />
                    </div>
					</td>
					</tr>
					
					<tr>
					<td>Gambar Kamar</td>
					<td>
					<div class="input-group input-lg">
                        <input type="file" name="gambar_kamar" id="preview_gambar1" accept="image/*" class="form-control" />
						<img src="#" id="gambar_nodin1" width="200" height='200' alt="" />
                    </div>
					</td>
					</tr>
					
					<tr>
					<td>Gambar Kamar Mandi</td>
					<td>
					<div class="input-group input-lg">
                        <input type="file" name="gambar_bath" id="preview_gambar2" accept="image/*" class="form-control" />
						<img src="#" id="gambar_nodin2" width="200" height='200' alt="" />
                    </div>
					</td>
					</tr>
					
					<tr>
					<td>Gambar Kasur</td>
					<td>
					<div class="input-group input-lg">
                        <input type="file" name="gambar_kasur" id="preview_gambar3" accept="image/*" class="form-control" />
						<img src="#" id="gambar_nodin3" width="200" height='200' alt="" />
                    </div>
					</td>
					</tr>
					
					<!--
					<div class="input-group input-lg">
						<span>Keterangan</span>
                        <input type="text" name="keterangan" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div>
					<div class="input-group input-lg">
						<span>Fasilitas Tersedia</span>
                        <input type="text" name="fasilitas" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div>
					<div class="input-group input-lg">
						<span>Alamat Penginapan</span>
                        <input type="text" name="alamat" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div>
					<div class="input-group input-lg">
						<span>Luas Penginapan</span>
                        <input type="text" name="luas" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div>
					<div class="input-group input-lg">
						<span>Jumlah Tempat Tidur</span>
                        <input type="text" name="jumlah_bed" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div>
					<div class="input-group input-lg">
						<span>Jumlah Kamar Mandi</span>
                        <input type="text" name="jumlah_bath" placeholder="" class="form-control" />
                        <span class="input-group-addon">,-</span>
                    </div> -->
					</table>
					<br>
					<div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>

            </div>
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
	
	<script type="text/javascript">
	function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
	<script type="text/javascript">
	function bacaGambar1(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin1').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
	<script type="text/javascript">
	function bacaGambar2(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin2').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
	<script type="text/javascript">
	function bacaGambar3(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin3').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
	
	<script type="text/javascript">
	$("#preview_gambar").change(function(){
   bacaGambar(this);
	});
	</script>
	<script type="text/javascript">
	$("#preview_gambar1").change(function(){
   bacaGambar1(this);
	});
	</script>
	<script type="text/javascript">
	$("#preview_gambar2").change(function(){
   bacaGambar2(this);
	});
	</script>
	<script type="text/javascript">
	$("#preview_gambar3").change(function(){
   bacaGambar3(this);
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