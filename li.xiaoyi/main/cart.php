<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";
$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">	
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Jowelry</h1>
			</div>
			<div class="flex-stretch"></div>
				<nav class="flex-none nav">
				<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="collections.php">Collections</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
				</nav>
		</div>
	</header>

	<div class="container">
		<h2>In Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?=array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;0.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;4.00</div>
					</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>