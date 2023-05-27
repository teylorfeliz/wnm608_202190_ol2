<?php
	
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	
// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1101,1302,1701)");
// print_r($cart);
$cart_items = getCartItems();
$cart = getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<!-- <div class="grid gap">
		<div class="col-xs-12 col-md-7"></div> -->
	<div class="container mt-1" style="display: flex;gap:2rem">
		<div class="card soft" style="width:34%">
			<h2>Item Review</h2>
			<?php echo array_reduce($cart_items,function($r,$o){
				
				$totalfixed = number_format($o->total,2,'.','');
				return $r."<div class='display-flex'>
				<div class='flex-stretch'>$o->name</div>
				<div class='flex-none'>&dollar;$totalfixed</div>
				</div>";
			}) ?>
		</div>


		<div class="card soft" style="width:66%">
			<h2>Product Checkout</h2>

			<form class="form">
				<h3>Address</h3>
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input id="address-street" type="text" placeholder="Street name" class="form-input">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-city" class="form-label">City</label>
							<input id="address-city" type="text" placeholder="City" class="form-input">
						</div>

						<div class="col-xs-12 col-md-6">
							<label for="address-state" class="form-label">State</label>
							<input id="address-state" type="text" placeholder="State" class="form-input">
						</div>
					</div>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-zip" class="form-label">Zip Code</label>
							<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="address-country" class="form-label">Country</label>
							<input id="address-country" type="text" placeholder="Country" class="form-input">
						</div>
					</div>
				</div>		

				<h3>Payment</h3>
				<div class="form-control">
					<label for="payment-name" class="form-label">Full Name</label>
					<input id="payment-name" type="text" placeholder="Name" class="form-input">
				</div>
				<div class="form-control">
						<div class="col-xs-12 col-md-6">
							<label for="payment-number" class="form-label">Card Number</label>
							<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
						</div>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="payment-expiration" class="form-label">Expiration</label>
							<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
						
						</div>

						<div class="col-xs-12 col-md-6">
							<label for="payment-cvv" class="form-label">CVV</label>
							<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
						</div>
						
					</div>
				</div>
				<div class="form-control">
					<label for="payment-zip" class="form-label">Zip Code</label>
					<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
				</div>
				<div class="form-control">
						<!-- <input type="submit" class="form-button" value="Submit"> -->
						<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				</div>
			</form>
		</div>
	
		


	</div>


	

</body>
</html>