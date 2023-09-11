<?php
session_start();
$qry=getUserInfo();
$row=mysqli_fetch_assoc($qry);
//$row['email'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="profileCustomer.php">KFC</a>
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
                        <li><a class="dropdown-item" href="profileCustomer.php">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
						<li><a class="dropdown-item" href="changePassCustomer.php">Change Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../mainMenu/loginPage.php">Logout</a></li>
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
                        <h1 class="mt-4">Profile</h1>
                        <ol class="breadcrumb mb-4">
							<div class="col-lg-8">
								<div class="card mb-4">
								  <div class="card-body">
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">First Name</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $row['firstName']?></p><!--FirstName-->
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Last Name</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $row['lastName']?></p><!--LastName-->
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Email</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $row['email']?></p><!--example@example.com-->
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Phone Number</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $row['phoneNum']?></p><!--8888888-->
									  </div>
									</div>
									</div>
								  </div>
								</div>
                        </ol>
						<button type="button" class="btn btn-success" onclick="window.location.href='../editProfile.php';">Edit</button>
                        
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php
function getUserInfo()
{
$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
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

?>