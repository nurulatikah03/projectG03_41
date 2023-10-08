<?php
session_start();
$_SESSION['dishNameToEdit'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Menu</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">
    <style>
        body {
            background-image: url('background.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
        }

        .card-header {
            background-color: #D60000; /* KFC red */
            color: white;
        }

        .form-control {
            border: 1px solid #D60000;
        }

        .form-control:focus {
            border-color: #D60000;
        }

        .btn-dark {
            background-color: #D60000;
            border-color: #D60000;
        }

        .btn-dark:hover {
            background-color: #B50000; /* Slightly darker red on hover */
            border-color: #B50000;
        }

        label {
            color: #D60000;
        }

        a {
            color: #D60000;
        }
		.custom-select {
			border: 1px solid #D60000; 
			color: #D60000; 
			background-color: white; 
			padding: 10px; 
			border-radius: 4px; 
		}

		.custom-select:focus {
			border-color: #D60000; /* Red border color on focus */
			outline: none; /* Remove the default focus outline */
		}
    </style>
</head>
<body>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Menu</h3></div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row mb-3">
										<div class="col-md-6">
											<div class="form-floating mb-3 mb-md-0">
												<input class="form-control" id="inputNameDish" type="text" placeholder="" name="nameDish" required/>
												<label for="inputNameDish">Name Of Dish</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-floating">
												<input class="form-control" id="inputDishPrice" type="number" placeholder="" name="dishPrice" required/>
												<label for="inputDishPrice">Price</label>
											</div>											
										</div>
									</div>
									<div class="form-floating mb-3">
										<select class="form-select custom-select" id="dishType" name="dishType" required>
											<option value="" disabled selected>Dish Type</option>
											<option>Nasi Lemak KFC</option>
											<option>Box Meals</option>
											<option>Value Combo</option>
											<option>A la Carte</option>
											<option>Beverages</option>
										</select>
									</div>
									<div class="form-floating mb-3">
										<input class="form-control" id="inputAboutDish" type="text" placeholder="" name="aboutDish" required/>
											<label for="inputAboutDish">About Dish</label>
									</div>
									<div class="mt-4 mb-0">
										<div class="d-grid"><button class="btn btn-dark btn-block" type="submit" name="editMenuButton">Update</button></div>
									</div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
							<?php
							if($_SESSION['editingUser']=="ADMIN"){
								echo '<div class="small"><a href="viewMenu-admin.php">Back to Menu List</a></div>';
							}else if($_SESSION['editingUser']=="STAFF"){
								echo '<div class="small"><a href="viewMenu-staff.php">Back to Menu List</a></div>';
							}
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
<?php
if(isSet($_POST['editMenuButton'])){
		editInfoMenu();
		if($_SESSION['editingUser']=="ADMIN"){
			echo "<script>alert('Update Successfully')</script>";
			echo "<script>window.top.location='viewMenu-admin.php'</script>";
		}else if($_SESSION['editingUser']=="STAFF"){
			echo "<script>alert('Update Successfully')</script>";
			echo "<script>window.top.location='viewMenu-staff.php'</script>";
		}
	}
	
function editInfoMenu(){
	$dishNameToEdit=$_SESSION['dishNameToEdit'];
	$nameDish=$_POST['nameDish'];
	$dishPrice=$_POST['dishPrice'];
	$dishType=$_POST['dishType'];
	$aboutDish=$_POST['aboutDish'];
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "update menu SET nameDish='".$nameDish."', dishPrice='".$dishPrice."' ,dishType='".$dishType."',aboutDish='".$aboutDish."' WHERE nameDish='".$dishNameToEdit."'";
	mysqli_query($con,$sql);
}

?>

