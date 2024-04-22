<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// In the function below, add [0] at the end to output as a single object instead of an array

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,4,6)");



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
						<h6 class="flex-none">3 items</h6>
					</div>
					<div class="space"></div>
					<div class="display-flex flex-column">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>						
				</div>

				<div class="layout-main-col">
					<div class="display-flex">
						<h5 class="flex-stretch">Total</h5>
						<h3 class="flex-none">&dollar;40605.00</h3>
					</div>
					<div class="space"></div>
					<div class="display-flex">
						<h5 class="flex-stretch">Subtotal</h5>
						<div class="flex-none">&dollar;36905.00</div>
					</div>
					<div class="display-flex">
						<h5 class="flex-stretch">Taxes</h5>
						<div class="flex-none">&dollar;3700.00</div>
					</div>
					<div class="space"></div>
					<form>
						<div class="form-control display-flex" style="justify-content: flex-end;">
							<a href="product_checkout.php" class="form-button">CHECK OUT</a>
						</div>
					</form>
				</div>
			</div>

		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>