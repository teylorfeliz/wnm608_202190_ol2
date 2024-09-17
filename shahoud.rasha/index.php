<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<?php include "parts/meta.php"; ?>

</head>
<body>
	<div class="view-window" style="background-image: url(img/gold.jpeg);">
		
		

		<?php include 'parts/navbar.php';?>

	</div>


	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-alugn-center">
				<div class="flex-stretch">
					<h2>About Us</h2>
				</div>
				
			</div>
			<dive class="article-body">
				<p>Gilded is a company that introduce gold accent office and home accessories and organization supplies to customers in the USA.</p>

				<p>At our shop you find the best quality and look for what you want for your desk and home gold decorations.</p>
			</dive>
		</article>
		
	</div>


	
<div class="container">
	<h2>Gold Products</h2>
	<?php  recommendedColor("gold"); ?>
	
	<h2>Acrylic Products</h2>
	<?php  recommendedColor("acrylic"); ?>

</div>




</div>
<?php include "parts/footer.php"; ?>
</body>
</html>
