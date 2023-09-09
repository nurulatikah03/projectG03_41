<!DOCTYPE html>
<!--viewAboutUs.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Us</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="viewAboutUs.php">KFC</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../mainMenu/customer/profileCustomer.php">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../mainMenu/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="../../startbootstrap-sb-admin-gh-pages/homepage.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Homepage
                            </a>
							<a class="nav-link" href="viewAboutUs.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                                About us
                            </a>
							<a class="nav-link" href="../../mainMenu/contactUs/viewContactUs.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
                                Contact us
                            </a>
						</div>	
					</div>
                </nav>
			</div>	
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">About Us</h1>
						<div class="jumbotron text-center">
							<img src="image/KFCview.png" style="width:40%;height:400px">
							<style>
								h1, h3, p{font-family:'Lato'; font-style:normal; font-weight:400; text-align:center;}
							</style>
							
							<h3>KFC NILAI SQUARE OUTLET</h3>
  							<p>The first certified green restaurant in Malaysia</p><br>
						</div>
  
						<div class="container">
 							<h3>KFC MALAYSIA</h3>
  						
						<p>The KFC Malaysia story began with the opening of our 1st restaurant on Jalan Tunku Abdul Rahman in 1973. 
						There are currently over 600 KFC restaurants nationwide serving Malaysians great tasting chicken 365 days a 
						year. As the No. 1 fast food and leading QSR brand in Malaysia, we are constantly working to better serve our 
						customers with great moments, excellent servicesand Finger Lickin' Good food.<br><br></p>
						
							<h3>Especially for Malaysians</h3>
						
						<p>We are an establishment that is run by Malaysians and managed by Malaysians; we took it upon ourselves to 
						create a selection of food that would make Malaysia proud on the international scene. Kentucky Nuggets, for 
						example, was conceived in Malaysia and then found its way to KFC worldwide. Today, Kentucky Nuggets is one of 
						KFC's successes.</p>
						
						<div class="jumbotron text-center">
						<img src="image/image1.png" style="width:60%; height:400px"><br><br>
						
						<p>"Meals on Wheels" was also developed in Malaysia. It was created for the purpose of bringing great tasting 
						chicken to places where a KFC Restaurant might not be available. So, any offices or companies can hold functions 
						at any place and anytime!<br><br>
						All our achievements add to our Malaysian identity. But it has only been possible because you invited us to share 
						your lives.</p>
						</div>
                        
                </main>
					</div>
			</div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
				</div>
		</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
