<?php
session_start();
$qry=getEditingCustomerInfo();
$row=mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Customer</title>
        <link href="css/styles.css" rel="stylesheet" />
		<style>body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }</style>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Information</h3></div>
                                    <div class="card-body">
									<b>User ID : <?php echo $row['user_id'];?></b>
                                        <form action="" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="firstName" value="<?php echo $row['firstName'];?>" required/>
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="lastName" value="<?php echo $row['lastName'];?>" required/>
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputPhoneNum" type="text" placeholder="Phone Number" name="phoneNum" value="<?php echo $row['phoneNum'];?>" required/>
                                                <label for="inputPhoneNum">Phone Number</label>
                                            </div>
                                            <div class="mt-4 mb-0">
												<div class="d-grid"><button class="btn btn-dark btn-block" type="submit" name="editButton">Change</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="customerList.php">Back to Customer List</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </body>
</html>

<?php
if(isSet($_POST['editButton'])){
	editInfoCust();
	echo "<script>window.top.location='customerList.php'</script>";
	}
	
function editInfoCust(){
	$customerEmailToEdit=$_SESSION['customerEmailToEdit'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$phoneNum=$_POST['phoneNum'];
	$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "update user_info SET firstName='".$firstName."' ,lastName='".$lastName."',phoneNum='".$phoneNum."' WHERE email='".$customerEmailToEdit."'";
	mysqli_query($con,$sql);
}

function getEditingCustomerInfo(){
	$customerEmailToEdit=$_SESSION['customerEmailToEdit'];
	$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * FROM user_info WHERE email='".$customerEmailToEdit."'";
	$query=mysqli_query($con,$sql);
	return $query;
}
?>