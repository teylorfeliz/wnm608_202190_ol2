<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ChicHaus</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/script.js"></script>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>
	
	<?php include "parts/header.php"; ?>

	<div class="layout-body landing">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">


			<div class="layout-main-cols">
				<div class="landing-image flex-none">
					<a href="new_drop.php">
						<picture>
						  <source srcset="img/landing-small.jpg" media="(max-width: 600px)">
						  <source srcset="img/landing-2.jpg" media="(max-width: 1500px)">
						  <source srcset="img/landing-2.jpg">
						  <img src="img/landing-2.jpg" alt="new product" style="width:100%; object-fit: contain;">
						</picture>
						<h2 class="view-new-drop">View New Drop</h2>
					</a>
				</div>
			</div>

		</div>

	</div>	

	<?php include "parts/footer.php"; ?>

</body>
</html>
















