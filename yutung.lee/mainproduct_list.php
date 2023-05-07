<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<!-- <link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
 -->
		
	<?php include "parts/mainmeta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>

	<script>
	query({type:'products_all'}).then(d=>{
		$(".productlist").html(listItemTemplate(d.result))
	});
	</script>
</head>
<body>

	<?php include "parts/mainnavbar.php"; ?>

	<div class="container">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class='productlist grid gap'></div>
		</div>

</body>
</html>











