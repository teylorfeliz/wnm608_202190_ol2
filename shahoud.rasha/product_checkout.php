<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<?php include "parts/meta.php"; ?>

</head>
<body>
	
	

<?php include "parts/navbar.php"; ?>
	

</div>


<div class="container">
	
					


		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<h2>Product Checkout</h2>
				<div class="form-control">
		     <h3>Address</h3>
<form>
				<div class="form-control">
					<label class="form-label">Street</label>
					<input type="text" placeholder="Street Name" class="form-input">
				</div>

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">City</label>
					</div>

					<div class="flex-stretch">
						<input type="text" placeholder="City" class="form-input">
					</div>

					<div class="flex-none">
						<label class="form-label">State</label>
					</div>

					<div class="flex-stretch">
						<input type="text" placeholder="State" class="form-input">
					</div>
				</div>

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Zip Code</label>
					</div>

					<div class="flex-stretch">
						<input type="text" placeholder="Zip Code" class="form-input">
					</div>

					<div class="flex-none">
						<label class="form-label">Country</label>
					</div>

					<div class="flex-stretch">
						<input type="text" placeholder="Country" class="form-input">
					</div>
				

			</form>
		</div>
	</div>



			
		     <h3>Payment</h3>
<form>
				<div class="form-control">
					<label class="form-label">Full Name</label>
					<input type="text" placeholder="Name" class="form-input">
				</div>

				<div class="form-control">
					<label class="form-label">Card Number</label>
					<input type="tel" pattern="\d*" maxlength="19" placeholder="#### #### #### ####" class="form-input">
				</div>

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Expiration Date</label>
					</div>

					<div class="flex-stretch">
						<input type="number"  maxlength="5" placeholder="MM/YY" class="form-input">
					</div>

					<div class="flex-none">
						<label class="form-label">CCV</label>
					</div>

					<div class="flex-stretch">
						<input type="password" placeholder="CCV" class="form-input">
					</div>
				</div>

				<div class="form-control">
					<label class="form-label">Zip Code</label>
					<input type="text" placeholder="Zip Code" class="form-input">
				</div>

				
					<div class="form-control">
					<!-- <input type="button" class="form-button" value="Submit"> -->

					<a href="checkout_confirmation.php" class="form-button"> Complete Checkout</a>
				</div>
			</form>
		</div>
	</div>


<div class="col-xs-12 col-md-5">
	<div class="card soft">
		<h2>Item Review</h2>
		<div class="card-section">
		
		<?php
		echo array_reduce($cart,function($r,$o){
			$totalfixed = number_format($o->total,2,'.','');
			return $r."<div class='display-flex'>
			<div class='flex-stretch'>$o->name</div>
			<div class='flex-none'>&dollar;$totalfixed</div>
			</div>";
		}) ?>
	</div>
	<?= cartTotals(); ?>
</div>
</div>
</div>
</div>
		
		
</div>

<?php include 'parts/footer.php';?>
</body>
</html>