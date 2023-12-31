<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="profileStaff.php">KFC&nbsp;</a>
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
                        <li><a class="dropdown-item" href="profileStaff.php">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
						<li><a class="dropdown-item" href="changePassStaff.php">Change Password</a></li>
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
						<div class="sb-sidenav-menu-heading">Order</div>
                            <a class="nav-link" href="../../dashboard/dashboardStaff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                View Order
                            </a>
							<div class="sb-sidenav-menu-heading">Customer</div>
							<a class="nav-link" href="../../dashboard/customerList/customerList-Staff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Customer List
							</a>
							<div class="sb-sidenav-menu-heading">Menu</div>
							<a class="nav-link" href="../../dashboard/viewMenu-staff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Menu
                            </a>
							<div class="sb-sidenav-menu-heading">Feedback</div>
							<a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-thumbs-up"></i></div>
                                View Feedback
                            </a>
						</div>	
					</div>
					<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Staff
                    </div>
                </nav>
			</div>	
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Feedback Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
							<thead>
								<tr class="table-primary">
									<th>Feedback ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Time</th>
									<th>Message</th>
								</tr>
							</thead>
							<?php
							$qry=getFeedback();
							while($row=mysqli_fetch_assoc($qry)){
							echo "
							<tbody>
								<tr>
									<td>".$row['feedback_id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['email']."</td>
									<td>".$row['phone']."</td>
									<td>".$row['time']."</td>
									<td>".$row['message']."</td>
									";
							}
							?>
							</table>
                        </ol>
                    </div>
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
function getFeedback()
{
$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql='select * from feedbackcustomer';
$qry=mysqli_query($con,$sql);
return $qry;
}

?>