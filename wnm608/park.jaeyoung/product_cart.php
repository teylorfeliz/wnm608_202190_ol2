<?php
include_once "lib/php/functions.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

		<div class="container">
			<h2>In Your Cart</h2>
			<div class="card soft">
				<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<? = array_reduce($checkout,function($r,$o){return $r."<div>$o->location</div>";}) ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
				<p>What do you got in there?</p>
				<p><a href="product_checkout.php">Checkout</a></p>
			</div>
		</div>
</body>
</html>