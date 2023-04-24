<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `product` WHERE `id`=".$_GET['id'])[0];



// print_p($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation Page</title>


	<?php include "parts/web_meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart</h2>

		<div class="display-flex">
			<div class="flex-none"><a href="web_product_list.php">Continue Shopping</a></div>
			<div class="flex-stretch"></div>
			<div class="flex-none"><a href="web_cart.php">Go To Cart</a></div>
		</div>
			
		</div>
	</div>



</body>
</html>

