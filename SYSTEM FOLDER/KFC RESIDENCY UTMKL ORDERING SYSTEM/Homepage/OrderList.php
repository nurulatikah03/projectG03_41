<?php
session_start();
$qry=getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<style>
		.icon-shopping-cart {
		font-size: 20px}
		
	.center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
		
	</style>
	
    <title>Order List</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	          <li class="nav-item cta"><a href="../mainMenu/feedback.php" class="nav-link">Share Your Feedback</a></li>
			  
			  <li class="nav-item"><a href="orderList.php" class="nav-link"><span class="icon-shopping-cart"></span></a></li>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/img1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Order List</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span><span> Order List <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   
   
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div>

             
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have <?php echo mysqli_num_rows($qry) ?> items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body"><!-- price --><i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>			
				<?php $totalPrice=0; ?>
				<?php while($row=mysqli_fetch_assoc($qry)){
				$imageURL = '../dashboard/uploads/'.$row["image_path"]; 
				$totalPrice += $row['price'];?>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img src="<?php echo $imageURL; ?>" class="img-fluid rounded-3" alt="Cart Item" style="width: 100px;">
                        </div>
                      </div>
					  <div class="d-flex flex-row align-items-center">
                        <div class="ms-3">
                          <h5><?php echo $row ['name']; ?></h5>
                          <p class="small mb-0"><?php echo $row['status']; ?></p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">1</h5>
                        </div>
                        <div style="width:80px;">
                          <h5 class="mb-0">RM<br><?php echo $row['price']; ?></h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
				
				<?php } ?>
				
				<hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">RM <?php echo $totalPrice; ?></p>
                    </div>
					<form action="checkout.php" method="POST">
					<input type='hidden' value='<?php echo $totalPrice; ?>' name='totalPriceToPay'>
					<button class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>RM <?php echo $totalPrice; ?></span>
                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>
					</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
			
             
		  
  </body>
</html>

<?php
function getCartItems()
{
    $con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$emailLogin=$_SESSION['emailLogin'];
	$sql = 'select * from cart_items where cust_email = "'.$emailLogin.'" AND status="PENDING PAYMENT"';
	$qry=mysqli_query($con,$sql);
	$totalRows = ($qry) ? mysqli_num_rows($qry) : 0;
	return $qry;
}

?>