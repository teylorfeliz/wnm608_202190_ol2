<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	
		<?php include "parts/navbar.php"; ?>

	<div class="styleguidecontainer">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

<div class="form-control">
	<div class="card none">
	<div class="display-flex"> 
			<div class="flex-stretch display-flex">
			 	<div class="secondfilter flex-none">
			 		<button data-filter="category" data-value="" type="button" class="form-button">All</button>
			 	</div>
			 	<div class="secondfilter flex-none">
			 		<button data-filter="category" data-value="food" type="button" class="form-button">Food</button>
			 	</div>
			 	<div class="secondfilter flex-none">
			 		<button data-filter="category" data-value="treat" type="button" class="form-button">Treat</button>
			 	</div>
			 	<div class="secondfilter flex-none">
			 		<button data-filter="category" data-value="accessory" type="button" class="form-button">Accessory</button>
			 	</div>
			 </div>
			 <div class="flex-none">
				<div class="filterbutton form-select">
						<select class="js-sort">
							<option value="1">Newest</option>
							<option value="2">Oldest</option>
							<option value="3">Least Expensive</option>
							<option value="4">Most Expensive</option>
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

<footer>
	Copyright © 2022 Adela Seo - AAU WNM 608 Assignment
</footer>