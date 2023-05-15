<?php
include "../lib/php/functions.php";
include "../parts/templates.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Home</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<?php include "../parts/navbar.php"; ?>
	<div class="container">
		<div class="card" style="text-align: center;"><img src="../img/index.jpg" alt="">
			<h2>Love Your Way</h2>
			<p>You’ll know who it’s for. You’ll know when it’s time. You’ll just know.</p>
			
		
		<h2>Latest Ring</h2>
		<?php recommendedCategory("ring"); ?>
		<h2>Latest Necklace</h2>
		<?php recommendedCategory("necklace"); ?>
		<h2>Latest Bracelet</h2>
		<?php recommendedCategory("bracelet"); ?>
		<h4><a href="collections.php">Explore</a></h4>
	</div>
</div>
</body>
</html>