<?php
session_start();
session_destroy();
header('Location:../loginPage.php');

/*
logout button
	echo'<div class="card-footer text-center py-3">
		<div class="small"><a href="logout.php">logout</a></div>
	</div>';

*/
?>