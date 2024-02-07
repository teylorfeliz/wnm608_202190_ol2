<?php 
include_once "lib/php/functions.php";
resetCart();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="styleguidecontainer">
		<div class="card soft">
			<h2>Thank you for your purchase!</h2>
			<div class="flex-none" class="continue"><a href="product_list.php"><button class="form-button">Continue Shopping</button></a></div>
		</div>
	</div>
	
</body>
</html>