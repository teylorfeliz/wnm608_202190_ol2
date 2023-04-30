<?php
	
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/store/$o.jpg'>";
});

//print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<?php include "parts/meta.php"; ?>
	<title>Product Item</title>   
	
	<?php include "parts/navbar.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>
<body>

	

	<div class="container">
		<h3>Go Back</h3>
		<div class="grid gap product-display">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/store/<?= $product->thumbnail ?>">
					</div>	
				
			
				<div class="images-thumbs">
					<?= $image_elements ?>
				</div>
				</div>
			</div>	
		
			<div class="col-xs-12 col-md-5">
				<form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">

						<div class="card-section">
							<h2 class="product-title"><?= $product->brand ?>&nbsp;<?= $product->name ?></h2>
							<div class="product-price">&dollar;<?= $product->price ?></div>				
						</div>

						<div class="card-section">
							<div class="form-cotrol">
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
						
							<div class="form-cotrol">
								<label for="product-size" class="form-label">Size</label>
								<div class="form-select">
										<select id="product-size" name="product-size">
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
										</select>										
								</div>							
								
							</div>
							
						</div>	
						<div class="card-section">
								<input type="submit" class="form-button" value="Add to Cart">
								</div>

						

				</form>

			</div>

					
				
				
			
				
		</div>

		<div class="card hard" >
				<p><?= $product->description ?></p>
			</div>
						
	</div>
		
	

	
	

</body>
</html>