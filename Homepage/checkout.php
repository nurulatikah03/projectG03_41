<?php
session_start();
require __DIR__."/vendor/autoload.php";

$qry=getCartItems();
$totalPrice = 0;
while ($row=mysqli_fetch_assoc($qry)){
	$totalPrice += $row['price'];
}
$stripe_secret_key = "sk_test_51OA3wHA6idJjdcEBH3GoRDUFnhlAKPvJSlgWXZqczfpf5CNAB5wIKEl8ubCfv8bCE9h5QgW0MhbgFaLHIZHqXWXz00xX5E5CoY";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
	"mode" => "payment",
	"success_url" => "http://localhost/projectG03_41/Homepage/success.php",
	"cancel_url" => "http://localhost/projectG03_41/Homepage/menu.php",
	"line_items" => [
		[
			"quantity" => 1,
			"price_data" => [
				"currency" => "myr",
				"unit_amount" => $totalPrice*100,
				"product_data" => [
					"name" => "KFC meal"
				]
			]
		]
	]
]);

http_response_code(303);
header("Location: ".$checkout_session->url);

?>
<?php
function getCartItems()
{
$con=mysqli_connect("localhost","sd41g3","sd41g3","sd41g3");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$emailLogin=$_SESSION['emailLogin'];
	$sql = 'select * from cart_items where cust_email = "'.$emailLogin.'" AND status="PENDING PAYMENT"';
	$qry=mysqli_query($con,$sql);
	$totalRows = ($qry) ? mysqli_num_rows($qry) : 0;
	return $qry;
	
}
?>
