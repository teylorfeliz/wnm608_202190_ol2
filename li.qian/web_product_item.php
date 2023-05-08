<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `product` WHERE `id`=".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});



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
			<form class="card soft flat" method="post" action="web_cart_action.php?action=add-to-cart">
				<input type="hidden" name="product-id" value="<?= $product->id ?>">
				<div class="card-section">
					<h2 class="product_title"><?= $product->id ?></h2>
					<div class="product_price">&dollar;<?= $product->price ?></div>
				</div>

				<div class="card-section">
					<div class="form-control">						
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select">
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>		
					</div>						
				</div>

				<div class="card-section">
					<input type="submit" class="form-button" value="Add To Cart">
				</div>
			</form>
				
				<div class="card soft ">
					<p><?= $product->description ?></p>
				</div>
		</div>			
		</div>
	</div>

</body>
</html>