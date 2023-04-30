<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItem();



?><!DOCTYPE html>
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

						<?= array_reduce($cart_items,'cartListTemplate' )?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<?= cartTotals() ?>
						
				</div>
			</div>
		</div>
</body>
</html>