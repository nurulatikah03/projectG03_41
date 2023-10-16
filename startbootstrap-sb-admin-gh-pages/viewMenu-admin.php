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
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboardAdmin.html">KFC&nbsp;</a>
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
                            <a class="nav-link" href="dashboardAdmin.html">
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
							<a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-cutlery"></i></div>
                                View Menu
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
                        <h1 class="mt-4">Menu List</h1>
                        <ol class="breadcrumb mb-4">
							<form action="uploadImage.php" method="POST" enctype="multipart/form-data">
								<fieldset>
									<legend>Upload Menu Item</legend>
									
									<div class="mb-3">
										<label for="file" class="form-label">Select Image File to Upload (JPG, JPEG, PNG, GIF):</label>
										<input type="file" class="form-control custom-file-input" id="file" name="file" required>
									</div>

									<div class="mb-3">
										<label for="dishName" class="form-label">Dish Name:</label>
										<input type="text" class="form-control" id="dishName" name="dishName" placeholder="Enter name" required>
									</div>

									<div class="mb-3">
										<label for="dishPrice" class="form-label">Set Dish Price (RM):</label>
										<input type="number" class="form-control" id="dishPrice" name="dishPrice" placeholder="Price (RM)" required>
									</div>

									<div class="mb-3">
										<label for="dishType" class="form-label">Dish Type:</label>
										<select class="form-select" id="dishType" name="dishType" required>
											<option>Family Buckets</option>
											<option>Box Meals</option>
											<option>Chicken</option>
											<option>Kids Meals</option>
											<option>Add-on Sides</option>
											<option>Beverages</option>
											<option>Burgers & Twister</option>
											<option>Nuggets & Tenders</option>
										</select>
									</div>

									<div class="mb-3">
										<label for="aboutDish" class="form-label">About:</label>
										<input type="text" class="form-control" id="aboutDish" name="aboutDish" placeholder="About Dish" required>
									</div>

									<button type="submit" class="btn btn-primary" name="submit_admin">Upload</button>
								</fieldset>
							</form>

                        </ol>
						<table class="table">
							<thead>
								<tr class="table-primary">
									<th style="text-align: center;">Dish Name</th>
									<th style="text-align: center;">Price</th>
									<th style="text-align: center;">Type</th>
									<th style="text-align: center;">About</th>
									<th style="text-align: center;">Image</th>
									<th style="text-align: center;">Edit</th>
									<th style="text-align: center;">Delete</th>
								</tr>
							</thead>
                        <?php
							$qry=getListOfImage();
							while($row=mysqli_fetch_assoc($qry)){
							$imageURL = 'uploads/'.$row["image_path"];
							echo "
							<tbody>
								<tr>
									<td style='text-align: center;'>".$row['nameDish']."</td>
									<td style='text-align: center;'> RM ".$row['dishPrice']."</td>
									<td style='text-align: center;'>".$row['dishType']."</td>
									<td style='text-align: center;'>".$row['aboutDish']."</td>
									<td style='text-align: center;'>";?><img src="<?php echo $imageURL; ?>" alt="" width="50" height="50"/><?php echo "</td>";
									$dishName = $row['nameDish'];
									echo "
									<td style='text-align: center;'>
									<form action='' method='POST'>
										<input type='hidden' value='$dishName' name='dishNameToEdit'>
										<button class='btn btn-success' name='editDishButton' >EDIT</button>
									</form>
									</td>
									<td style='text-align: center;'>
									<form action='' method='POST'>
										<input type='hidden' value='$dishName' name='dishNameToDelete'>
										<button class='btn btn-danger' name='deleteDishButton' >DELETE</button>
									</form>
									</td>
									
								</tr>
							</tbody>
							";
							}
						?>
						</table>
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
if(isSet($_POST['editDishButton'])){
	$_SESSION['editingUser']='ADMIN';
	$_SESSION['dishNameToEdit']=$_POST['dishNameToEdit'];
	echo "<script>window.top.location='editImage.php'</script>";
}
if(isSet($_POST['deleteDishButton'])){
	deleteImage($_POST['dishNameToDelete']);
}
function getListOfImage(){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "SELECT * FROM menu ORDER BY dishType";
	$query = mysqli_query($con,$sql);
	return $query;
}
function deleteImage($nameDish){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "delete from menu where nameDish='".$nameDish."'";
	mysqli_query($con,$sql);
	echo "<script>window.top.location='viewMenu-admin.php'</script>";
}
?>