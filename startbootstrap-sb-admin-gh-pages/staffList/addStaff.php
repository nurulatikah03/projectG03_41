<!DOCTYPE html>
<html lang="en">
<?php
echo'
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add New Staff</title>
        <link href="css/styles.css" rel="stylesheet" />
		<style>body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }</style
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Account of New Staff</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="firstName" required/>
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="lastName" required/>
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" required/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" required/>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="confirmPassword" required/>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-floating mb-3">
                                                <input class="form-control" id="inputPhoneNum" type="text" placeholder="Phone Number" name="phoneNum" required/>
                                                <label for="inputPhoneNum">Phone Number</label>
                                            </div>
                                            <div class="mt-4 mb-0">
												<div class="d-grid"><button class="btn btn-dark btn-block" type="submit" name="addStaffButton">Add</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="staffList.php">Back to Staff List</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </body>
 ';

if(isSet($_POST['addStaffButton'])){
	if($_POST['password']==$_POST['confirmPassword']){
	addNewStaff();
	echo "<script>window.top.location='staffList.php'</script>";
	}else{
		echo "<script>alert('Invalid Password')</script>";
	}
	}
	
function addNewStaff(){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$phoneNum=$_POST['phoneNum'];
	$userType="STAFF";
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	$sql = "insert into user_info(email,password,firstName,lastName,userType,phoneNum) values('$email', '$password','$firstName','$lastName','$userType','$phoneNum')";
	mysqli_query($con,$sql);
}
?>