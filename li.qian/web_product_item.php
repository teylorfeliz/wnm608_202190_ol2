<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `product` WHERE `id`=".$_GET['id'])[0];



// print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>

	<?php include "parts/web_meta.php"; ?>


	<script src="js/product_thumbs.js"></script>

</head>
<body>
	
	<?php include "parts/header.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft images-main">
					<div class="images-main"> 
						<img src="img/<?= $product->images ?>" width="680px">
					</div>
						
					
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<h2 class="product_title"><?= $product->name ?></h2>
						<div class="product_price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section display-flex">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select" id="product-amount">
							<select name="" id="">
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							<option value="">6</option>
							<option value="">7</option>
							<option value="">8</option>
							<option value="">9</option>
							<option value="">10</option>
						</select>
						</div>
						
					</div>

					<div class="card-section display-flex">
						<a href="web_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
					</div>

					<div class="card-section display-flex">
						<p><?= $product->description ?></p>
					</div>
				</div>
			</div>			
		</div>
	</div>

</body>
</html>