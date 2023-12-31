<?PHP
include "add_to_database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
  <style>
		.icon-shopping-cart {
			color: #FFFFFF;
		font-size: 20px}
	
  </style>		
    <title>Menu</title>
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
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="../mainMenu/customer/profileCustomer.php" class="nav-link">Profile</a></li>
				<li class="nav-item"><a href="../mainMenu/logout.php" class="nav-link">Logout</a></li>
				<li class="nav-item cta"><a href="feedback.php" class="nav-link">Share Your Feedback</a></li>
		<div class="sidenav">
			<ul style="list-style-type: none; padding: 0;">
				<li class="nav-item"><a href="OrderList.php" class="nav-link" onclick="addCartItemToDatabase()"><span class="icon-shopping-cart"></span></a></li>
			</ul>
		</div>  
			</ul>
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
            <h1 class="mb-2 bread">Menu</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span><span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Family Buckets</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Box Meals</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Chicken</a>
				  
				  <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Kids Meals</a>
				  
				  <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Add-on Sides</a>

	              <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Beverages</a>

	              <a class="nav-link ftco-animate" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Burgers & Twister</a>
				  
				  <a class="nav-link ftco-animate" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">Nuggets & Tender</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
				  <div class="row no-gutters d-flex align-items-stretch">
				 <?php
					$selectedDishType="Family Buckets";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					
					        	
					</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Box Meals";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Chicken";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"]; ?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>  	
					</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Kids Meals";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>  
					</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Add-on Sides";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					</div>
	              </div>
					
					<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Beverages";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					</div>
	              </div>
					
					<div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-day-7-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Burgers & Twister";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					</div>
	              </div>
					
					<div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-day-8-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					<?php
					$selectedDishType="Nuggets & Tenders";
					$qry=getListFromDishType($selectedDishType);
					while($row=mysqli_fetch_assoc($qry)){
						$imageURL = '../dashboard/uploads/'.$row["image_path"];
						$prod_id= $row['id'];?>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        	<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(<?php echo $imageURL;?>);"></div>
					              <div class="text d-flex align-items-center">
									<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $row["nameDish"]; ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">RM <?php echo $row["dishPrice"]; ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row["aboutDish"]; ?></span></p>
										  <button class="btn btn-primary" onclick="addToCart('<?php echo $row["nameDish"]; ?>', '<?php echo $row["dishPrice"]; ?>','<?php echo $row["image_path"];?>')">Add</button>
									</div>
					              </div>
					            </div>
					       </div>
						
					<?php } ?>
					</div>
	              </div>
				  <button class="btn btn-primary" onclick="addCartItemToDatabase()">Submit Order</button>
	            </div>
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
    <script>
	var cart = [];
	
	  function addToCart(dishName, dishPrice, imagePath) {
		var product = {
		  name: dishName,
		  price: dishPrice,
		  image: imagePath,
		};

		// Add the product to the cart array
		cart.push(product);
		
		// Iterate through the cart and build the cartContent string
		var cartContent = "Cart Items:\n";
		for (var i = 0; i < cart.length; i++) {
		  cartContent += cart[i].name + " - RM " + cart[i].price + "\n";
		}

		// Display the cart content in an alert
		alert(cartContent);
	  }
</script>

<script>
function addCartItemToDatabase() {
    // You can perform an AJAX request to a PHP script to add items to the database
    // Here's a simplified example of an AJAX request using the fetch API:
    fetch('add_to_database.php', {
        method: 'POST',
        body: JSON.stringify({ cart }), // Send cart data as JSON
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        const response = JSON.parse(data);
        if (response.statusInsert === 'success') {
            // Display a success message
            alert(response.message);
			cart=[];
        } else {
            // Display an error message
            alert(response.message);
        }
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}

</script>
  </body>
</html>

<?php

function getMenuList(){
	$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * FROM menu ORDER BY dishType";
	$query = mysqli_query($con,$sql);
	return $query;
}

function getListFromDishType($selectedDishType){
	$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * FROM menu WHERE dishType ='".$selectedDishType."'";
	$query = mysqli_query($con,$sql);
	return $query;
}
?>