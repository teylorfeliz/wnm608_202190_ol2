<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

<div class="container2">
	<div class="card soft">
		<h2>Payment</h2>
		<p>This is item # <?= $_GET['id'] ?></p>

		<div class="btn-area">
				<a class="cancel" href="cart.php"><button type="submit">Cancel</button></a>
			</div>

		<div class="btn-area">
				<a class="buy" href="#"><button type="submit">Buy</button></a>
			</div>

	</div>
</div>
</body>
</html>