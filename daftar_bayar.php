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
					?>
					<li>
						<ul>
							<li>
							<?php echo "<a href='daftar_bayar.php'>Daftar Pembayaran</a>" ?>
							</li>
							<li>
							<span class="label label-danger" style="border-radius: 60px;">
											<?php

											$hitung_jumlah = mysqli_query($konek_db,"select * from pemesan where total > terbayar");
											echo mysqli_num_rows($hitung_jumlah);

											?>
							</span>
							</li>
						</ul>
					</li>
					<?php
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
			
               <table id="datatable" class="stripe">
                  <thead>
                  <th>No</th>
                  <th>ID Pembayaran</th>
                  <th>Nama Pemesan</th>
                  <th>Total Bayar</th>
                  <th>Pembayaran</th>
                  <th>Aksi</th>
                  </thead>
                  <tbody>
                      <?php
                    include 'koneksi.php';
                    $queryselect = "SELECT * FROM pemesan";
                    $resultselect = mysqli_query($konek_db,$queryselect);
                    if (mysqli_num_rows($resultselect)) {
                        //echo "ada isinya";  
                        $no = 1;
                        while ($row = mysqli_fetch_array($resultselect)) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?> </td>
                                <td><?php echo $row['id']; ?> </td>
                                <td><?php echo $row['nama']; ?> </td>
                                <td><?php echo $row['total']; ?> </td>
                                <td><?php
                                    if ($row['terbayar'] >= $row['total']) {
                                        echo "<span class='label label-success'>SELESAI</span>";
                                    } else {
                                        echo "<span class='label label-danger'>BELUM</span>";
                                    };
                                    ?> </td>
                                <td>
									<a class='btn btn-info' href='images/<?php echo $row['file'] ?>'><i class='glyphicon glyphicon-download'></i></a>
									<a class='btn btn-primary btn-warning' href='tampil_ubah_pembayaran.php?id=<?php echo $row['id'];?>'><i class='glyphicon glyphicon-plus-sign'></i> Tambah Data Pembayaran</a>
								</td>
                            </tr>
                            <?php
                            $no ++;
                        }
                    } else {
                        echo "kosong";
                    }
					?>
                  </tbody>
                  <tfoot>    
                  </tfoot>
              </table>

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
