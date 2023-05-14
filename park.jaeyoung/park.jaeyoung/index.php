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
<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container">
	<div class="card soft">


		<figure class="figure product">
			<img src="img/rv1.png">
			
		</figure>
	</div>
	</div>

	<!-- product -->
	<?php include "parts/products.php"; ?>

	<div class="container">
		<?php 

		$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='' ORDER BY `date_create` DESC Limit 3");
		recommendedProducts($result);

		?>
	</div>



</body>





</html>

