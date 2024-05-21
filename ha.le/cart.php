<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

$cart = getcart();

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

				<?php 

				if(count($cart)) {
					?>
					<div class="layout-main-cols">
						<div class="layout-main-col">
							<div class="display-flex">
								<div class="flex-none">
									<h4><?= makeCartBadge(); ?> Item(s) in Cart</h4>
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
					<?php 
				} else {
					?>
					<div class="layout-main-cols">
						<div class="layout-main-col">
							<div class="flex-none">
								<p style="margin: 0; line-height: 1em;">No items in cart</p>
							</div>					
						</div>
					</div>
					<div class="doublespace"></div>
					<div class="layout-main-cols">
						<div class="layout-main-col">
							<h4 class="space-after-paragraph">Recommendations</h4>
							<?php
							recommendedAnything(8);
							?>
						</div>
					</div>
					<?php
				}
				?>
		</div>

	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>