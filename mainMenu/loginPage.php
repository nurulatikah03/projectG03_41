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
        <title>Login Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet" />
		<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>Login</b></h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"  required>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password"  required>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="forgetPassword.php">Forgot Password?</a>
												<button class="btn btn-primary" type="submit" name="loginButton">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registerPage.php">Need an account? Sign up!</a></div>
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
	
<?php
	 if(isSet($_POST['loginButton'])){
		$validUser=validatePassword($_POST['email'],$_POST['password']);
		
		if($validUser){
			$userType=getUserType($_POST['email']);
			$_SESSION['emailLogin']=$_POST['email'];
			if($userType=='ADMIN'){
				echo "<script>window.top.location='../startbootstrap-sb-admin-gh-pages/dashboardAdmin.html'</script>";
			}else if($userType=='STAFF'){
				echo "<script>window.top.location='../startbootstrap-sb-admin-gh-pages/dashboardStaff.html'</script>";
			}else{
				echo "<script>window.top.location='../feliciano-master'</script>";
			}
		}
		else{
			echo '<script>alert("Invalid user")</script>';
		}
	}
	
	
	function validatePassword($email,$password)
	{
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql= "SELECT * FROM user_info where email = '".$email ."' and password ='".$password."'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	if($count == 1){
		return true;//username and password is valid
	}
	else
	{
		return false; //invalid password
	}
	}
	
	
	function getUserType($email){
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql= "SELECT userType FROM user_info where email = '".$email ."'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$userType=$row['userType'];
	return $userType;
	}
	}
?>
</html>

