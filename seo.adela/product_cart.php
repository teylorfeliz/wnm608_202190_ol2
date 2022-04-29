<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

<div class="styleguidecontainer">
		<h2>Shopping Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>

	<div class="card soft">
		<p>What do you got in there?</p>
		 <li class="productname"><a href="product_item.php?id=3">Product</a></li>

		<div class="btn-area">
				<a class="buy" href="shop.php"><button type="submit">KEEP SHOPPING</button></a>
		</div>

	</div>

</div>


	</body>
</html>