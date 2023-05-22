<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart = getCart();

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
			
			<?php

			if(count($cart)) {
				?>
				<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce(getCartItem(),'cartListTemplate' )?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<?= cartTotals() ?>
						<div class="card-section">
							<a href="product_checkout.php" class="form-button">Checkout</a> 
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
				<h3>Other Recommendation</h3>
				<?php recommendedAnything(6);?>
			</div>
			<?php
			}
			?>
		</div>
</body>
</html>