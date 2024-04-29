<?php

include_once "lib/php/functions.php";

resetCart()

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>


	<div class="layout-body">


		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">

			<div class="layout-main-cols">
				<div class="layout-main-col">
					<h4>CONGRATULATIONS!</h4>
					<p class="space-before-paragraph">Your order for our limited-edition furniture has been successfully placed. <br> You will recieve a confirmation email shortly.</p>
					<p class="space-before-paragraph"><a href="product_list.php">Continue shopping</a></p>
				</div>
				<div class="layout-main-col"></div>
			</div>

		</div>



	</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>