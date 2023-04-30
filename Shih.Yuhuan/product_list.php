<?php
include_once "lib/php/functions.php";
				if(isset($_GET['product'])){
					$product = $_GET['product'];
				} else {
					$product = null;
				}
				

				include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		
		<div class="card">
			<h2>Product List</h2>

			<?php
				
				$result = makeQuery(
					makeConn(),
					// "SELECT `id`,`name`,`price`
					"
					SELECT *
					FROM `products`
					WHERE `product` = '$product'
					ORDER BY `price` DESC
					LIMIT 12
					"
				);
				
				echo "<div class='productlist grid gap'>",array_reduce($result,'productlistTemplate'),"</div>";

			?>
		</div>
	</div>

</body>
</html>