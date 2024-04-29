<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// In the function below, add [0] at the end to output as a single object instead of an array

// $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,4,6)");

$cart_items = getCartItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<div class="display-flex">
						<div class="flex-none">
							<h4>Cart</h4>
						</div>
						<div class="flex-stretch"></div>
					</div>
					<div class="space"></div>
					<div class="display-flex flex-column">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>						
				</div>

				<div class="layout-main-col">
					<div class="display-flex" style="justify-content: flex-end;">
						<?= cartTotals() ?>
					</div>
				</div>
			</div>

		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>