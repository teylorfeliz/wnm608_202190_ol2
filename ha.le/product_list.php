<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">
			
			<div class="product-list-container">

				<?php

				include_once "lib/php/functions.php";
				include_once "parts/templates.php";

				$result = makeQuery(
					makeConn(),
					"SELECT *
					FROM `products`
					ORDER BY `date_create` DESC
					LIMIT 12
					"
				);

				echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate'),"</div>";



				?>


			</div>
		</div>
	</div>


	<?php include "parts/footer.php"; ?>

</body>
</html>










