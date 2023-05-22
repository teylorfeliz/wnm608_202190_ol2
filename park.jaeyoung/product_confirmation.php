<?php

include_once "lib/php/function.php";
resetCart();
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

		<div class="container">
			<div class="card soft">
				<h2>Thank you for your purchases!</h2>
				<p><a href="product_list.php">Continue shopping</a></p>
			</div>
		</div>
</body>
</html>