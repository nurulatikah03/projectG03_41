<?php
if(isSet($_POST['submitFeedbackBtn'])){
	sendFeedback();
}

function sendFeedback(){
	$nameCustSendFeedback=$_POST['nameCustSendFeedback'];
	$emailCustSendFeedback=$_POST['emailCustSendFeedback'];
	$phoneCustSendFeedback=$_POST['phoneCustSendFeedback'];
	$timeSendFeedback=$_POST['timeSendFeedback'];
	$messageFeedback=$_POST['messageFeedback'];
	
	$con=mysqli_connect("localhost","u337610268_sd41g3","omLZ9ekw","u337610268_sd41g3");
	if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "INSERT INTO feedbackcustomer (name,email,phone,time,message) values('$nameCustSendFeedback','$emailCustSendFeedback','$phoneCustSendFeedback','$timeSendFeedback','$messageFeedback')";
	mysqli_query($con,$sql);
	echo '<script>alert("Thanks for you suggestion!")</script>';
	echo "<script>window.top.location='feedback.php'</script>";
}
?>