<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
		<?php include "parts/navbar.php"; ?>

	<div>
			<nav class="nav nav-material2">
				<ul>
				<li><a href="product_category.php?id=1">Food</a></li>
				<li><a href="product_category.php?id=2">Treats</a></li>
				<li><a href="product_category.php?id=3">Accessories</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="">
	
			<figure class="figure display-flex flex-column">
				<img src="img/main.jpeg" alt class="col-xs-12 col-md-4 adpic">
				<figcaption>Product</figcaption>
			</figure>
	</div>


<div class="container2">
		

		<?php

	
		$result = makeQuery(
			makeConn(), 
			"
			SELECT *
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";  

		?>
</div>



</body>
</html>

<footer>
	Copyright © 2022 Adela Seo - AAU WNM 608 Assignment
</footer>