<?php 
// Include the database configuration file 
$statusMsg = '';
// File upload directory 
$targetDir = "uploads/"; 
 
if(isset($_POST["submit_admin"])||isset($_POST["submit_staff"])){
    if(!empty($_FILES["file"]["name"])){
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
  
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath)){
                // Insert image file name into database 
				$dishName=$_POST['dishName'];
				$dishPrice=$_POST['dishPrice'];
				$dishType=$_POST['dishType'];
				$aboutDish=$_POST['aboutDish'];
                $con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
				$sql = "insert into menu(nameDish,dishPrice,dishType,aboutDish,image_path) values('$dishName','$dishPrice','$dishType','$aboutDish','$fileName')";
                mysqli_query($con,$sql);
                $statusMsg = "The image has been uploaded successfully."; 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{
        $statusMsg = 'Please select a file to upload.'; 
    } 
}

if(isSet($_POST["submit_admin"])){
	echo '<script>alert("'.$statusMsg.'")</script>';
	echo '<script>window.location.href = "viewMenu-admin.php";</script>';
}else if(isSet($_POST["submit_staff"])){
	echo '<script>alert("'.$statusMsg.'")</script>';
	echo '<script>window.location.href = "viewMenu-staff.php";</script>';
}


?>