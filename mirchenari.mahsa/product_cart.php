<?php
			
include_once "lib/php/functions.php";
include_once "parts/templates.php";


$cart = getCart();


$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>

</head>
<body>




	<div class="container">
		<div class="card ">
		<h2>IN YOUR CART</h2>

<?php

if(count($cart)){



	?>


		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card ">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>

			</div>
	

			<div class="col-xs-12 col-md-5">
				<div class="card ">
					<?= cartTotals() ?>
					<div class="card-section">
                     <a href="product_checkout.php" class="form-button">Checkout</a>
                    </div>
				     </div>
			</div>
		</div>

	
<?php 

} else{
	?>
	<div class="card medium">
		<p>No item in your cart</p>
	
    	</div>
<div class="card soft">
        <h3>OTHER RECOMMENDATIONS</h3>
       
         <?php recommendedAnything(6); ?>
     </div>
  

	
	<?php

}
?>

</div>

    </div>
       
          
   
</body>
</html>













