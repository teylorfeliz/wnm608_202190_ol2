<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

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

		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card shadow">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card colors">
					<?= cartTotals() ?>
					<div class="card-section">
						<a href="payment.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<?php
		} else {
		?>
			<div class="card light">
				<p class="nocart">No items in cart</p>
			</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything(6); ?>

				<div class="btn-area">
					<a class="buy" href="product_list.php"><button type="submit">KEEP SHOPPING</button></a>
				</div>
		
			<?php
		}
		?>
</div>



</body>
</html>