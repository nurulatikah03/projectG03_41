<?php
session_start();
$qry=getUserInfo();
$row=mysqli_fetch_assoc($qry);
$qryHistory=getOrderHistory();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+603-2602 1587</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-envelope"></span></div>
						    <span class="text">kfcresidencyutmkl@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>9:00AM - 10:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">KFC</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="../../Homepage/index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="../../Homepage/menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="../../Homepage/contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="profileCustomer.php" class="nav-link">Profile</a></li>
			  <li class="nav-item"><a href="../../mainMenu/logout.php" class="nav-link">Logout</a></li>
	          <li class="nav-item cta"><a href="../../Homepage/feedback.php" class="nav-link">Share Your Feedback</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/img1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Profile</h1>
			<p class="breadcrumbs"><span class="mr-2"><a href="../../Homepage/index.html">Home <i class="ion-ios-arrow-forward"></i></a><span> Profile <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate makereservation p-4 p-md-5 pt-5">
                <div class="py-md-5">
				<h2 class="text-center"><b>Personal Information</b></h2><br><br>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="<?php echo $row['firstName']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" value="<?php echo $row['lastName']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" value="<?php echo $row['phoneNum']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="button" value="Edit Profile" class="btn btn-primary py-3 px-5" onclick="window.location.href='../editProfile.php';">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="button" value="Change Password" class="btn btn-primary py-3 px-5" onclick="window.location.href='changePassCustomer.php';">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate makereservation p-4 p-md-5 pt-5">
                <div class="py-md-5">
				<h2 class="text-center"><b>Order History</b></h2><br><br>
					<table class="table">
						<tr class="table-warning">
							<th style="text-align: center;">Order ID</th>
							<th style="text-align: center;">Dish Name</th>
							<th style="text-align: center;">Price</th>
							<th style="text-align: center;">Status</th>
						</tr>
						<tbody>
						<?php
						while($row2=mysqli_fetch_assoc($qryHistory)){
							if($row2['status']=="REJECTED"){
								echo 
								"<tr class='table-danger'>
								<td style='text-align: center;'>".$row2['id']."</td>
								<td style='text-align: center;'>".$row2['name']."</td>
								<td style='text-align: center;'>RM ".$row2['price']."</td>
								<td style='text-align: center;'>".$row2['status']."</td>
								</tr>
								
								";
							}else{
								echo 
								"<tbody>
								<tr>
								<td style='text-align: center;'>".$row2['id']."</td>
								<td style='text-align: center;'>".$row2['name']."</td>
								<td style='text-align: center;'>RM ".$row2['price']."</td>
								<td style='text-align: center;'>".$row2['status']."</td>
								</tr>
								</tbody>
								";
							}
						}
						?>
						</tbody>
					</table>	
                </div>
            </div>
        </div>
    </div>

</section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">KFC Restaurant</h2>
              <p>It was created for the purpose of bringing great tasting 
						chicken to places where a KFC Restaurant might not be available. So, any offices or companies can hold functions 
						at any place and anytime!</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/kfc"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/kfc/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/KFCMalaysia/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00AM - 10:00PM</span></li>
                <li class="d-flex"><span>Sunday</span><span>9:00AM - 10:00PM</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/ista1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta2.jfif);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta4.jfif);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">VISION</h2>
            	<p>To sell food in fast, friendly and environment that appeals to pride conscious, health minded customer.</p>
				<h2 class="ftco-heading-2">MISSION</h2>
            	<p>To maximize profitbility, improve Shareholder value and deliver sustainable growth year after year.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<?php
function getUserInfo()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$emailLogin=$_SESSION['emailLogin'];
	$sql = 'select * from user_info where email = "'.$emailLogin.'"';
	$qry=mysqli_query($con,$sql);
	return $qry;
}

function getOrderHistory()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$emailLogin=$_SESSION['emailLogin'];
	$sql = 'select * from cart_items where cust_email = "'.$emailLogin.'" AND status IN ("READY", "REJECTED");';
	$qry=mysqli_query($con,$sql);
	return $qry;
	
}

?>