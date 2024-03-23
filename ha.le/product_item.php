<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="container layout-body">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">
			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4>PRODUCT ITEM</h4>


          			<p>This is item # <?= $_GET['id'] ?></p>
				</div>
				<div class="layout-main-col">
					
				</div>
			</div>
		</div>
	</div>


	<?php include "parts/footer.php"; ?>




</body>
</html>