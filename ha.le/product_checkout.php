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
							<?= array_reduce($cart,'checkoutSummaryTemplate') ?>
						</div>
					</div>
				</div>

				<div class="layout-main-col">
					<h4>SHIPPING</h4>
					<div class="space"></div>
					<form>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">FIRST NAME</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">LAST NAME</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">COUNTRY</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">ZIP CODE</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex">
							<div class="flex-stretch">
								<label class="form-label">ADDRESS LINE 1 (STREET)</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">ADDRESS LINE 2 (APT, SUIT, UNIT)</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">STATE</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">CITY</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">EMAIL</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">PHONE</label>
								<input type="text" placeholder="" class="form-input">
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
								<label class="form-label">NAME ON CARD</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">CARD NUMBER</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">EXPIRE</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">CVV</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
					</form>


					<div class="space"></div>
					<h4 style="padding-bottom: 1em">BILLING</h4>
					<form>
						<label><input type="checkbox" id="input-1">Same as shipping address</label>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">FIRST NAME</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">LAST NAME</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">COUNTRY</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">ZIP CODE</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex">
							<div class="flex-stretch">
								<label class="form-label">ADDRESS LINE 1 (STREET)</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">ADDRESS LINE 2 (APT, SUIT, UNIT)</label>
								<input type="text" placeholder="" class="form-input">
							</div>
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-stretch">
								<label class="form-label">STATE</label>
								<input type="text" placeholder="" class="form-input">
							</div>
							<div class="flex-stretch">
								<label class="form-label">CITY</label>
								<input type="text" placeholder="" class="form-input">
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