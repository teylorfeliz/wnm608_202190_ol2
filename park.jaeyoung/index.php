<?php
include_once "lib/php/function.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RVtoME</title>
	<?php include "parts/meta.php";?>
</head>
<body class="flush">

	<?php include "parts/navbar.php"; ?>


	<div class="container">
	<div class="card soft">


		<figure class="figure product">
			<img src="img/rv1.png">
			
		</figure>
	</div>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Recommended Destinations</h2>
		</div>
	</div>


	<div class="container">
		<?php 

	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `location`='Seattle,WA' ORDER BY `date_create` DESC Limit 3");
		recommendedProducts($result);
		?>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Delivery Available</h2>
		</div>
	</div> 

	<div class="container">
		<?php 

	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='Delivery' ORDER BY `date_create` DESC Limit 3");
		recommendedProducts($result);
		?>
	</div>



</body>





</html>

