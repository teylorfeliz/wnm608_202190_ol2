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
	<title>Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4>PRODUCT CHECKOUT</h4>
					<div class="space"></div>
					<div class="checkout-summary">
						<div>
							<h6 class="space-before-paragraph" style="color: var(--color-neutral-medium">Summary</h6>
						</div>
						<div class="display-flex flex-column">
							<?= array_reduce($cart_items,'checkoutSummaryTemplate') ?>
						</div>
					</div>
				</div>

				<div class="layout-main-col">
					<h4>SHIPPING</h4>
					<div class="space"></div>
					<form>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="first-name">FIRST NAME</label>
								<input type="text" placeholder="" class="form-input" name="first-name" id="first-name">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="last-name">LAST NAME</label>
								<input type="text" placeholder="" class="form-input" name="last-name" id="last-name">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="country">COUNTRY</label>
								<input type="text" placeholder="" class="form-input" name="country" id="country">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="zip-code">ZIP CODE</label>
								<input type="text" placeholder="" class="form-input" name="zip-code" id="zip-code">
							</div>
						</div>
						<div class="form-control display-flex">
							<div class="flex-stretch">
								<label class="form-label" for="address-line-1">ADDRESS LINE 1 (STREET)</label>
								<input type="text" placeholder="" class="form-input" name="address-line-1" id="address-line-1">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="address-line-2">ADDRESS LINE 2 (APT, SUIT, UNIT)</label>
								<input type="text" placeholder="" class="form-input" name="address-line-2" id="address-line-2">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="state">STATE</label>
								<input type="text" placeholder="" class="form-input" name="state" id="state">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="city" >CITY</label>
								<input type="text" placeholder="" class="form-input" name="city" id="city">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="email">EMAIL</label>
								<input type="text" placeholder="" class="form-input" name="email" id="email">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="phone">PHONE</label>
								<input type="text" placeholder="" class="form-input" name="phone" id="phone">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">NOTE (OPTIONAL)</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
					</form>	

					<div class="space"></div>
					<h4>PAYMENT</h4>
					<div class="space"></div>
					<form>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="name-on-card">NAME ON CARD</label>
								<input type="text" placeholder="" class="form-input" name="name-on-card" id="name-on-card">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="card-number">CARD NUMBER</label>
								<input type="text" placeholder="" class="form-input" name="card-number" id="card-number">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="expire">EXPIRE</label>
								<input type="text" placeholder="" class="form-input" name="expire" id="expire">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="cvv">CVV</label>
								<input type="text" placeholder="" class="form-input" name="cvv" id="cvv">
							</div>
						</div>
					</form>


					<div class="space"></div>
					<h4 style="padding-bottom: 1em">BILLING</h4>
					<form>
						<label><input type="checkbox" id="input-1">Same as shipping address</label>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="first-name">FIRST NAME</label>
								<input type="text" placeholder="" class="form-input" name="first-name" id="first-name">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="last-name">LAST NAME</label>
								<input type="text" placeholder="" class="form-input" name="last-name" id="last-name">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="billing-country">COUNTRY</label>
								<input type="text" placeholder="" class="form-input" name="billing-country" id="billing-country">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="billing-zip-code">ZIP CODE</label>
								<input type="text" placeholder="" class="form-input" name="billing-zip-code" id="billing-zip-code">
							</div>
						</div>
						<div class="form-control display-flex">
							<div class="flex-stretch">
								<label class="form-label" for="billing-address-line-1">ADDRESS LINE 1 (STREET)</label>
								<input type="text" placeholder="" class="form-input" name="billing-address-line-1" id="billing-address-line-1">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="billing-address-line-2">ADDRESS LINE 2 (APT, SUIT, UNIT)</label>
								<input type="text" placeholder="" class="form-input" name="billing-address-line-2" id="billing-address-line-2">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label" for="billing-state">STATE</label>
								<input type="text" placeholder="" class="form-input" name="billing-state" id="billing-state">
							</div>
							<div class="flex-stretch">
								<label class="form-label" for="billing-city" >CITY</label>
								<input type="text" placeholder="" class="form-input" name="billing-city" id="billing-city">
							</div>
						</div>
					</form>	


					<div class="space"></div>
					<form>
						<div class="form-control">
							<a href="product_confirmation.php" class="form-button">COMPLETE PAYMENT</a>
						</div>
					</form>










				</div>

			</div>
		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>