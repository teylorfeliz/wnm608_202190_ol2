<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";



?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
<?php include "parts/meta.php"; ?>

</head>

<body>
	<div class="view-window" style="background-image: url(img/gold.jpeg);">
		
		

		<?php include 'parts/navbar.php';?>

	</div>


	<div class="container">
			<h2>Product List</h2>

		




			<?php 


		$result = makeQuery(
			makeConn(),
			"
			SELECT `id`,`name`,`price`,`thumbnail`
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

		
			?>
		
	</div>



<?php include 'parts/footer.php';?>

</body>
</html>

