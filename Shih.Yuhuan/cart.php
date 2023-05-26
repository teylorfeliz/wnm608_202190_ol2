<?php
	
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	
$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1101,1302,1701)");

$cart_items = getCartItems();
$cart = getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<h2>In Your Cart</h2>

		<?php 
		if(count($cart)){
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartlistTemplate') ?>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<?= cartTotals()?>

				</div>
			</div>
		</div>
		<?php
		} else {
			?>
			<div class="card soft">
			<p>No items in your cart</p>
			</div>
			<h3>Other Recommendations</h3>
			<?php recommendedAnthing(6); ?>
			<?php

		}
		?>	
	</div>

</body>
</html>