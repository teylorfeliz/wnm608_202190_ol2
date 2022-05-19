<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<title>Product Added to cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

<div class="styleguidecontainer">
	<div class="card soft">
		<h2>You added <?= $product->name ?> to your cart</h2>
		<p class="cartp">There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>


	<div class="display-flex">
		<div class="flex-none" class="continue"><a href="product_list.php"><button class="form-button">Continue Shopping</button></a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="product_cart.php"><button class="form-button2">Go To Cart</button></a></div>
	</div>
	</div>
</div>

</body>
</html>