<!DOCTYPE html>
<!--viewAboutUs.php-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact Us</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
		<style>
			h3{
				font-family:'Lato'; 
				font-style:normal; 
				font-weight:400;
				text-align:center;
			}
				
			iframe{
				position:absolute;
				text-align:center;
				width:900px;
				height:500px;
			}
			
			.gmap_canvas{
				overflow:hidden;
				text-align:center;
				width:600px;
				height:400px;
			}
			
			.gmap_iframe {
				text-align:center;
				width:600px!important;
				height:400px!important;
			}
		</style>
	</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="viewContactUs.php">KFC</a>
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
							<a class="nav-link" href="../../mainMenu/aboutUs/viewAboutUs.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                                About us
                            </a>
							<a class="nav-link" href="viewContactUs.php">
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
					<h1 class="mt-4">Contact Us</h1>
					<div class="w3-section">
						<hr>
						<div class="jumbotron text-center">
							<img src="image/KFC.jpg" style="width:70%; height:400px">
							<hr style="width:200px:bold" class="w3-opacity" >
						</div>
					</div>
					<div class="container">
					<h3>
						<i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
						Gurney Mall, 8, Jln Maktab,<br>&nbsp;&nbsp;&nbsp;
						Kampung Datuk Keramat, 54000<br>&nbsp;&nbsp;&nbsp;
						Kuala Lumpur, Federal Territory of<br>&nbsp;&nbsp;&nbsp;
						Kuala Lumpur<br><br>
					</h3>
		
					<h3>
						<i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> 
						Phone: +603-2602 1587<br><br>
					</h3>
		
					<h3>
						<i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> 
						Email: kfcresidencyutmkl@gmail.com
					</h3><br><br>
				<div class="container-fluid px-4">		
					<div class="mapouter">
						<div class="gmap_canvas">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.705095857183!2d101.71970647581325!3d3.1721353530091796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc376f6af06fff%3A0xd68f5fcabfc16f94!2sKFC%20Gurney%20Mall!5e0!3m2!1sen!2smy!4v1694249679945!5m2!1sen!2smy"
							style="border:0;"></iframe><br><br><br>
						</div>
					</div>
				</div>
			</main>
			</div>
			</div>
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