<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();


//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>

	
	<?php include "parts/mainmeta.php"; ?>


</head>
<body>

	<?php include "parts/mainnavbar.php"; ?>


	<div class="container">   
		<h2>In Your Cart</h2>

		<?php

		if(count($cart)) {
		?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce(getCartItems(),'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
					<div class="card-section">
						<a href="main_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<?php
		} else {
			?>
			<div class="card soft">
				<p>No item in cart</p>
			</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything(6); ?>
			<?php
		}
		?>
	</div>



</body>
</html>