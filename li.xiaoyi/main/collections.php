<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jowelry</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">	
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Jowelry</h1>
			</div>
			<div class="flex-stretch"></div>
				<nav class="flex-none nav">
				<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="collections.php">Collections</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
				</nav>
		</div>
	</header>
	<div class="container">
			<h2>Product List</h2>
			

			<?php

			include_once "../lib/php/functions.php";
			include_once "../parts/templates.php";

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
