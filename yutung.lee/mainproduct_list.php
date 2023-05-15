<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	

	<?php include "parts/mainmeta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>
	<!-- Header -->
	<?php include "parts/mainnavbar.php"; ?>

	<!-- <div class="container">
			<div class="card soft" style="text-align: center;">
			<h2 style="padding-bottom:20px;">catagory</h2>

				<div class="grid ten gap">				
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Dairy & Eggs</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Meat</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Fresh Fruit</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Frozen</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Bread</div>
				</div>
		</div>
	</div> -->
	


	<div class="container">
		<h2>Product List</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search" style="max-width: 98%;">
				<input type="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control">
			<div class="card soft">
			<div class="display-flex">
				<div class="flex-stretch display-flex">
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button" class="form-button" style="padding: 5px; margin: 5px;">All</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Dog" type="button" class="form-button" style="padding: 5px; margin: 5px;">Dog</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Cat" type="button" class="form-button" style="padding: 5px; margin: 5px;">Cat</button>
				</div>
				</div>
				<div class="flex-none">
					<div class="form-select">
						<select class="js-sort">
							<option value="1">Newest</option>	
							<option value="2">Oldest</option>	
							<option value="3">Low To High</option>	
							<option value="4">High To Low</option>						
						</select>
					</div>	
				</div>										
			</div>	
			</div>								
		</div>
				
									
		<div class='productlist grid gap'></div>
		</div>
	

	

</body>
</html>










