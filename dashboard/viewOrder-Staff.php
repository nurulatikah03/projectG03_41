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
        <title>Order</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboardStaff.html">KFC&nbsp;</a>
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
                        <li><a class="dropdown-item" href="../mainMenu/staff/profileStaff.php">Profile</a></li>
						<li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../mainMenu/staff/changePassStaff.php">Change Password</a></li>
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
                            <a class="nav-link" href="dashboardStaff.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
							</a>
							<div class="sb-sidenav-menu-heading">Customer</div>
							<a class="nav-link" href="customerList/customerList-Staff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Customer List
							</a>
							<div class="sb-sidenav-menu-heading">Menu</div>
							<a class="nav-link" href="viewMenu-staff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Menu
							</a>
							<div class="sb-sidenav-menu-heading">Order</div>
							<a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Order
							</a>
							<div class="sb-sidenav-menu-heading">Feedback</div>
							<a class="nav-link" href="../mainMenu/staff/viewFeedback-staff.php">
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
                        <h1 class="mt-4">Order List</h1>
						<table class="table">
							<thead>
								<tr class="table-primary">
									<th style="text-align: center;">Order ID</th>
									<th style="text-align: center;">Image</th>
									<th style="text-align: center;">Dish Name</th>
									<th style="text-align: center;">Price</th>
									<th style="text-align: center;">Status</th>
									<th style="text-align: center;">Accept</th>
									<th style="text-align: center;">Reject</th>
									<th style="text-align: center;">Done</th>
								</tr>
							</thead>
                        <?php
							$qry=getListOfOrder();
							while($row=mysqli_fetch_assoc($qry)){
							$imageURL = 'uploads/'.$row["image_path"];
							echo "
							<tbody>
								<tr>
									<td style='text-align: center;'>".$row['id']."</td>
									<td style='text-align: center;'>";?><img src="<?php echo $imageURL; ?>" alt="" width="50" height="50"/><?php echo "</td>
									<td style='text-align: center;'>".$row['name']."</td>
									<td style='text-align: center;'> RM ".$row['price']."</td>
									<td style='text-align: center;'>".$row['status']."</td>";
									$dishID = $row['id'];
									if($row['status']=='Waiting For Accept'){
									echo "
									<td style='text-align: center;'>
									<form action='' method='POST'>
										<input type='hidden' value='$dishID' name='dishIDToAccept'>
										<button class='btn btn-success' name='acceptDishButton' >Accept</button>
									</form>
									</td>

									<td style='text-align: center;'>
									<form action='' method='POST'>
										<input type='hidden' value='$dishID' name='dishIDToReject'>
										<button class='btn btn-danger' name='rejectDishButton' >Reject</button>
									</form>
									</td>

									<td style='text-align: center;'>
										<button class='btn btn-secondary' disabled>Done</button>
									</td>
									";
									}else if($row['status']=='ACCEPTED'){
									echo "
										<td style='text-align: center;'>
											<button class='btn btn-secondary' disabled>Accept</button>
										</td>
										<td style='text-align: center;'>
											<button class='btn btn-secondary' disabled>Reject</button>
										</td>
										<td style='text-align: center;'>
										<form action='' method='POST'>
											<input type='hidden' value='$dishID' name='dishIDToPickUp'>
											<button class='btn btn-info' name='doneDishButton' >Done</button>
										</form>
										</td>
									";
									}else{
									echo "
									<td style='text-align: center;'>
										<button class='btn btn-secondary' disabled>Accept</button>
									</td>
									<td style='text-align: center;'>
										<button class='btn btn-secondary' disabled>Reject</button>
									</td>
									<td style='text-align: center;'>
										<button class='btn btn-secondary' disabled>Done</button>
									</td>
									";
									}
									echo"
								</tr>
							</tbody>
							";	
							}
						?>
						</table>
						</div>
                </main>
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
if(isSet($_POST['acceptDishButton'])){
	acceptDish();
	echo "<script>window.top.location='viewOrder-Staff.php'</script>";
}

if(isSet($_POST['rejectDishButton'])){
	rejectDish();
	echo "<script>window.top.location='viewOrder-Staff.php'</script>";
}

if(isSet($_POST['doneDishButton'])){
	doneDish();
	echo "<script>window.top.location='viewOrder-admin.php'</script>";
}

function getListOfOrder(){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "SELECT * FROM cart_items ORDER BY CASE WHEN status ='Waiting For Accept' THEN 1 WHEN status='ACCEPTED' THEN 2 WHEN status='READY' THEN 3 WHEN status='REJECTED' THEN 4 ELSE 5 END;";
	$query = mysqli_query($con,$sql);
	return $query;
}


function rejectDish(){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = $sql = "UPDATE cart_items SET status='REJECTED' WHERE id='".$_POST['dishIDToReject']."'";
	mysqli_query($con,$sql);
}

function acceptDish() {
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "UPDATE cart_items SET status='ACCEPTED' WHERE id='".$_POST['dishIDToAccept']."'";
	mysqli_query($con,$sql);
}

function doneDish(){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "UPDATE cart_items SET status='READY' WHERE id='".$_POST['dishIDToPickUp']."'";
	mysqli_query($con,$sql);
}
?>