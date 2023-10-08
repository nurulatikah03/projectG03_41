<?php
session_start();
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
            <a class="navbar-brand ps-3" href="dashboardAdmin.html">KFC&nbsp;<i class="fas fa-drumstick-bite"></i></a>
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
                        <li><a class="dropdown-item" href="../../mainMenu/admin/profileAdmin.php">Profile</a></li>
						<li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../mainMenu/admin/changePassAdmin.php">Change Password</a></li>
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
                            <a class="nav-link" href="../dashboardAdmin.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
							</a>
							<a class="nav-link" href="../staffList/staffList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Staff List
							</a>
							<a class="nav-link" href="customerList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Customer List
							</a>
							<a class="nav-link" href="../viewMenu-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                View Menu
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
                        <h1 class="mt-4">Customer List</h1>
                        <ol class="breadcrumb mb-4">
                            <table class="table">
							<thead>
								<tr class="table-primary">
									<th>Email</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone Number</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<?php
							$qry=getListOfCustomer();
							while($row=mysqli_fetch_assoc($qry)){
							echo "
							<tbody>
								<tr>
									<td>".$row['email']."</td>
									<td>".$row['firstName']."</td>
									<td>".$row['lastName']."</td>
									<td>".$row['phoneNum']."</td>";
									$email = $row['email'];
									echo "<td>
									<form action='' method='POST'>
										<input type='hidden' value='$email' name='customerEmailToEdit'>
										<button class='btn btn-success' name='editCustomerButton'>Edit</button>
									</form>
									</td>";
									echo "<td>
									<form action='' method='POST'>
										<input type='hidden' value='$email' name='customerEmailToDelete'>
										<button class='btn btn-danger' name='deleteCustomerButton'>DELETE</button>
									</form>
									</td>
								</tr>
							</tbody>
							";
							}
							?>
							</table>
                        </ol>
                    </div>
                </main>		
			</div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
if(isSet($_POST['deleteCustomerButton'])){
	deleteCustomer($_POST['customerEmailToDelete']);
}
if(isSet($_POST['editCustomerButton'])){
	$_SESSION['customerEmailToEdit']=$_POST['customerEmailToEdit'];
	echo "<script>window.top.location='editCustomer.php'</script>";
}

function getListOfCustomer()
{
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "select * from user_info where userType='CUSTOMER'";
	$qry = mysqli_query($con,$sql);
	return $qry;  
}

function deleteCustomer($email){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "delete from user_info where email='".$email."'";
	mysqli_query($con,$sql);
	echo "<script>window.top.location='customerList.php'</script>";
}
?>