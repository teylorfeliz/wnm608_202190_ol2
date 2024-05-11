<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

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
	<script src="js/script.js"></script>
</head>
<body class="">
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">
			<div class="layout-main-cols">
				<div class="layout-main-col">
					<nav class='nav nav-crumbs'>
						<div class="display-flex space-after-paragraph"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" style="line-height: 1em">Back</a></div>
					</nav>
				</div>
			</div>
			<div class="layout-main-cols">
				<div class="layout-main-col">
					<div class="display-flex flex-wrap ">
						<div class="flex-none">
							<h3><?= $product->name ?></h3>
						</div>
						<div class="flex-stretch"></div>
						<div class="flex-none">
							<h3>&dollar;<?= $product->price ?></h3>
						</div>
					</div>

          			<div class="grid gap product_item space-before-paragraph product-item-images">
          				<div class="col-xs-12 col-lg-11 images-main">
          					<img src="img/<?= $product->thumbnail ?>" alt="">
          				</div>
          				<div class="display-flex col-xs-6 col-lg-1 flex-wrap images-thumbs">
          					<?= $images_elements ?>
          				</div>
          			</div>
				</div>


				<div class="layout-main-col">

					<div class="space"></div>
					<form method="post" action="cart_actions.php?action=add-to-cart">

						<input type="hidden" name="product-id" value="<?= $product->id ?>">
						<h5>Design by <?= $product->designer ?></h5>
						<div class="card hard">
							<h5>Story</h5>
							<p><?= $product->description ?></p>
						</div>
						<div class="space"></div>
						<h5>Details</h5>
						<p>Made to order<br><?= $product->dispatch ?></p>
						<p>Material: <?= $product->materials ?></p>
						<p>Dimension: <?= $product->dimensions ?></p>


						<div class="display-flex flex-align-center space-before-paragraph">
							<div class="flex-none display-flex">
								<h5><label for="product-amount" class="flex-none">QUATITY</label></h5>
								<div class="form-select flex-none" style="margin-left: 1em">
									<select id="product-amount" name="product-amount"> 
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
						</div>

						<div class="space"></div>
						<div class="form-control">
							<input type="submit" class="form-button" value="ADD TO CART">
						</div>

					</form>
				</div>

				<div class="lightbox">
					<div class="lightbox-back"></div>
					<div class="lightbox-content"></div>
				</div>
			</div>

			<div class="doublespace"></div>
			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h5>Recommended products</h5>
					
					<?php
					recommendedSimilar($product->category,$product->id);
					?>

				</div>

			</div>	

		</div>
	</div>

	

	<?php include "parts/footer.php"; ?>



</body>
</html>







