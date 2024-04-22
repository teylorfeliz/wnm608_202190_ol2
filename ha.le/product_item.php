<?php

include_once "lib/php/functions.php";

// In the function below, add [0] at the end to output as a single object instead of an array

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

$images = explode(",", $product->images);

$images_elements = array_reduce($images, function($r,$o){
	return $r."<img src='img/$o'>";
});

// print_p($product);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">
			<div class="layout-main-cols">
				<div class="layout-main-col">
					<div class="display-flex">
						<div class="flex-none">
							<h3><?= $product->name ?></h3>
						</div>
						<div class="flex-stretch"></div>
						<div class="flex-none">
							<h3>&dollar;<?= $product->price ?></h3>
						</div>
					</div>
					<p><?= $product->designer ?></p>

          			<div class="grid gap product_item">
          				<div class="col-xs-12 col-lg-11 images-main">
          					<img src="img/<?= $product->thumbnail ?>" alt="">
          				</div>
          				<div class="display-flex col-xs-12 col-lg-1 images-thumbs">
          					<?= $images_elements ?>
          				</div>
          			</div>

				</div>
				<div class="layout-main-col">

					<div class="doublespace"></div>
					<div class="card hard">
						<h5>Story</h5>
						<p><?= $product->description ?></p>
					</div>
					<h6>Details</h6>
					<p>Made to order<br><?= $product->dispatch ?></p>
					<p>Material: <?= $product->materials ?></p>
					<p>Dimension: <?= $product->dimensions ?></p>

					<div class="display-flex">
						<div class="flex-none">
							<h5>Select size</h5>
						</div>
					</div>
					<div class="display-flex flex-align-center">
						<div class="flex-none display-flex">
							<h5 class="flex-none">QUATITY</h5>
							<div class="form-select flex-none" style="margin-left: 1em">
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-control">
						<a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">ADD TO CART</a>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php include "parts/footer.php"; ?>




</body>
</html>