<?php
$totalCust = getCustomerNum();
$totalStaff = getStaffNum();
$totalMenu = getMenuNum();
$totalFeedback = getFeedbackNum();
$salesQry = getSales();
$totalSales=0;
while ($row=mysqli_fetch_assoc($salesQry)){
	$totalSales+=$row['price'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboardAdmin.php">KFC&nbsp;</a>
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
                        <li><a class="dropdown-item" href="../mainMenu/admin/profileAdmin.php">Profile</a></li>
						<li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../mainMenu/admin/changePassAdmin.php">Change Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../mainMenu/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
						<div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
							</a>
							<div class="sb-sidenav-menu-heading">Staff</div>
							<a class="nav-link" href="staffList/staffList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Staff List
							</a>
							<div class="sb-sidenav-menu-heading">Customer</div>
							<a class="nav-link" href="customerList/customerList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Customer List
							</a>
							<div class="sb-sidenav-menu-heading">Menu</div>
							<a class="nav-link" href="viewMenu-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Menu
							</a>
							<div class="sb-sidenav-menu-heading">Order</div>
							<a class="nav-link" href="viewOrder-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Order
							</a>
							<div class="sb-sidenav-menu-heading">Feedback</div>
							<a class="nav-link" href="../mainMenu/admin/viewFeedback-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-thumbs-up"></i></div>
                                View Feedback
							</a>
						</div>	
					</div>
					<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
			</div>	
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Customer</h5>
									<h6 class="card-subtitle mb-2 text-muted">Total :</h6>
									<p class="card-text"><?php echo mysqli_num_rows($totalCust); ?></p>
								</div>
							</div>							
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Staff</h5>
									<h6 class="card-subtitle mb-2 text-muted">Total :</h6>
									<p class="card-text"><?php echo mysqli_num_rows($totalStaff); ?></p>
								</div>
							</div>
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Menu</h5>
									<h6 class="card-subtitle mb-2 text-muted">Total :</h6>
									<p class="card-text"><?php echo mysqli_num_rows($totalMenu); ?></p>
								</div>
							</div>	
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Feedback</h5>
									<h6 class="card-subtitle mb-2 text-muted">Total :</h6>
									<p class="card-text"><?php echo mysqli_num_rows($totalFeedback); ?></p>
								</div>
							</div>							
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Sales</h5>
									<h6 class="card-subtitle mb-2 text-muted">Total :</h6>
									<p class="card-text"><?php echo "RM ".$totalSales;?></p>
								</div>
							</div>
                        </ol>
                        
                </main>
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

<?php
function getCustomerNum()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = 'select * from user_info where userType = "CUSTOMER" ';
	$qry=mysqli_query($con,$sql);
	return $qry;
}

function getStaffNum()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = 'select * from user_info where userType = "STAFF" ';
	$qry=mysqli_query($con,$sql);
	return $qry;
}

function getMenuNum()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = 'select * from menu';
	$qry=mysqli_query($con,$sql);
	return $qry;
}

function getSales()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = 'select * from cart_items WHERE status != "REJECTED"';
	$qry=mysqli_query($con,$sql);
	return $qry;
}

function getFeedbackNum()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = 'select * from feedbackcustomer';
	$qry=mysqli_query($con,$sql);
	return $qry;
}
?>