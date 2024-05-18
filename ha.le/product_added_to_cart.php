<?php

include_once "lib/php/functions.php";

// In the function below, add [0] at the end to output as a single object instead of an array

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

$cart_product = cartItembyId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Confirmation</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4>You added <?= $product->name ?> to your cart.</h4>
					<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart</p>

					<div class="flex-none">
						<p class="space-before-paragraph">
							<a href="product_list.php">Continue shopping</a>
						</p>
					</div>
					<div class="flex-none">
						<p class="space-before-paragraph">
							<a href="product_checkout.php">Checkout</a>
						</p>
					</div>
				</div>

				<div class="layout-main-col"></div>
			</div>

		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>