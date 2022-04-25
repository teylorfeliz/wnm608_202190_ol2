<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];


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
		<h2>You added <?= $product->name ?> to</h2>
		<p><a href="product_cart.php">Review Your Cart</a></p>
	</div>
</div>


</body>
</html>