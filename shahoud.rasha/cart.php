<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<?php include "parts/meta.php"; ?>

</head>
<body>
	
	

<?php include "parts/navbar.php"; ?>

</div>


<div class="container card soft">
	
	<div class="display-flex flex-alugn-center">
		<div class="flex-stretch">
				<h2>In Your Cart</h2>
				<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
					 

					<?= cartTotals() ?>


					</div>
				</div>
				</div>
		</div>
		
	
	
</div>


	

</div>

<?php include 'parts/footer.php';?>
</body>
</html>