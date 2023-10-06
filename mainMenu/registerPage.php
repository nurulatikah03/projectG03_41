<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'processOTP.php';
echo'
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Customer</title>
        <link href="css/styles.css" rel="stylesheet" />
		<style>body {
            background-image: url("background.png");
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
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
												<div class="d-grid"><button class="btn btn-primary btn-block" type="submit" name="registerButton">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="loginPage.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
 ';
 
 //register button
if(isSet($_POST['registerButton'])){
	$_SESSION['emailToRegister']=$_POST['email'];
	$_SESSION['passwordRegister']=$_POST['password'];
	$_SESSION['firstNameRegister']=$_POST['firstName'];
	$_SESSION['lastNameRegister']=$_POST['lastName'];
	$_SESSION['phoneNumRegister']=$_POST['phoneNum'];
	if($_POST['password']==$_POST['confirmPassword']){
	sendOTPToRegisterEmail();
	echo "<script>window.top.location='enterOTP.php'</script>";
	}else{
		echo "<script>alert('Wrong Password')</script>";
	}
	}

if(isSet($_POST['otpButton'])){
	if(validateOTP($_SESSION['emailToRegister'])==$_POST['otpEntered']){
	registerAcc();
	}
	}
	
function registerAcc(){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	if(!$con){
	echo "Error : ".mysqli_connect_error($con);
	}
	else{
	$email=$_SESSION['emailToRegister'];
	$password=$_SESSION['passwordRegister'];
	$userType="CUSTOMER";
	$firstName=$_SESSION['firstNameRegister'];
	$lastName=$_SESSION['lastNameRegister'];
	$phoneNum=$_SESSION['phoneNumRegister'];
	$sql = "insert into user_info(email,password,firstName,lastName,userType,phoneNum) values('$email', '$password','$firstName','$lastName','$userType','$phoneNum')";
	mysqli_query($con,$sql);
	deleteUsedOTP($email);
	echo "<script>window.top.location='loginPage.php'</script>";
	}
}

?>
</html>