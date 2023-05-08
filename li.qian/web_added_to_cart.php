<?php

include_once "lib/php/functions.php";
$product = makeQuery(makeConn(),"SELECT * FROM `product` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head> 
	<title>Confirmation</title>
	<?php include "parts/web_meta.php";?>
</head>
<body>
	<?php include "parts/header.php";?>

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart</h2>
			<p>There are now <?= $cart_product->amount ?> of <?$product->id ?> in your cart</p>

			<div class="display-flex">
				<div class="flex-none"><a href="web_product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="web_cart.php">Go to Cart</a></div>
			</div>
		</div>
	</div>
</body>
</html>
