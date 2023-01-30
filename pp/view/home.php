<?php 
	//session_start();
require_once('header.php');
?>
<?php 
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
		<h1>Welcome Home!</h1>
		
		
		

		<a href="add_seller.php"> Add Seller </a><br> 
		<a href="seller_list.php"> Seller List </a> <br> 
		<a href="verify_Seller_profies.php"> Search and View Seller Profies </a><br> 
		<a href="Block_Seller.php"> Block Seller </a><br> 
		<a href="verify_buyer_profies.php">Scarch and Verify Buyer Profies </a><br>
        <a href="block_buyer.php"> Block Buyer </a><br> 
		<a href="Updateproduct.php"> Update Product Details </a><br> 
		<a href="RemoveProduct.php"> Remove Product Details </a><br> 
		<a href="See_Product_Details.php"> See Product Details </a><br> 
		<a href="add_buyer.php"> Add Buyer </a><br> 
		<a href="Add_Manager.php"> Add Manager </a><br> 
         <a href="../controller/logout.php"> logout </a><br> 
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

