<?php
session_start();
$emailLogin=$_SESSION['emailLogin'];//get user email
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
    $data = json_decode(file_get_contents('php://input'), true);
    $cart = $data['cart'];

	foreach ($cart as $item) {
    $name = $item['name'];
    $price = $item['price'];
    $status = "PENDING PAYMENT";
	$cust_email=$emailLogin;
	$image_path=$item['image'];

    $sql = "INSERT INTO cart_items (name, price, status,cust_email,image_path) VALUES ('$name', '$price', '$status','$emailLogin','$image_path')";
	$result=mysqli_query($con,$sql);
	
}
if ($result) {
        // Data was successfully inserted
        $response = [
			'statusInsert' => 'success',
            'message' => 'Successfully added to cart'
        ];
    } else {
        // Data insertion failed
        $response = [
			'statusInsert' => 'error',
            'message' => 'Failed to add into cart.'
        ];
    }

    // Send the response back to the client
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>