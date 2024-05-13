<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nova Media</title>	

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>New This Week!</h2>

			
		</div>
	</div>

	<div class="view-window" style="background-image:url('img/star_circuit_01.png')"></div>

	<div class="container">
		<div class="card soft">
			<h2>Must Have for the Holidays!</h2>	
		</div>
	</div>

	<div class="view-window" style="background-image:url('img/star_circuit_01.png')"></div>

	<div class="container">
		<div class="card soft">
			<h2>New Items We're Looking Forward To!</h2>	
		</div>
	</div>

	<div class="container">
		<h2>Latest </h2>
		<?php recommendedCategory("li"); ?>
		<h2>Latest </h2>
		<?php recommendedCategory("bags"); ?>
	</div>

</body>
</html>