<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>


	<?php include "parts/web_meta.php"; ?>
</head>
<body>
	<!-- Header -->
	<?php include "parts/header.php"; ?>

	<div class="container">
			<div class="card soft" style="text-align: center;">
			<h2 style="padding-bottom:20px;">Category</h2>

				<div class="grid ten gap">				
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Dairy & Eggs</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Meat</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Fresh Fruit</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Frozen</div>
					<div class="col-xs-2" style="padding-bottom: 0.5em; font-size: 1.3em;">Bread</div>
				</div>
		</div>
	</div>
	


	<div class="container">
		<div class="card soft">
			
	<?php



	$result = makeQuery(
		makeConn(), 
		"
		SELECT *
		FROM `product`
		ORDER BY `name` DESC
		LIMIT 12
		"
	);

	echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";

	?>
		</div>
	</div>

	

</body>
</html>