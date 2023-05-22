<?php
include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clover's Fresh</title>


<?php include "parts/web_meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

<link rel="stylesheet" href="https://use.typekit.net/sut4alb.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>
<body class="flush">
	
	<!-- header> -->
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1 style="font-family: --font-theme-title:june-expt-variable, sans-serif; color: var(--color-white);">Clover's Fresh</h1>
			
			</div>
			<div class="flex-stretch"></div>
	
		<nav class="flex-none nav">
			<ul class="container display-flex">
				<li><a href="home.php">Home</a></li>
				<li><a href="web_product_list.php">Product</a></li>
				<li><a href="web_about.php">About</a></li>
				<li><a href="web_cart.php">
					<span>Cart</span>
					<span class="badge"></span>
				</a></li>
			</ul>
		</nav>
		</div>
	</header>


	<div class="container">
		<!-- <h2 id="figures">Figures</h2> -->

	<div class="card">
		<!-- <h3>Basic Figure</h3> -->

		<figure class="figure product-overlay">
			<img src="img/fruit_home.jpeg" alt="">
			<!-- <figcaption>Product</figcaption> -->
		</figure>
	</div>
	</div>

	<!-- product -->

	
<!-- 	<div class="container">			
		<h2>Latest Fruit</h2>
		<?php recommendedCategory("fruit"); ?>
		<h2>Latest Vegetables</h2>
		<?php recommendedCategory("vegetable"); ?>		
	</div> -->

	<div class="container">
		<h2>Latest Fruit</h2>
		<?php recommendedCategory("fruit"); ?>
		<h2>Latest Vegetables</h2>
		<?php recommendedCategory("vegetable"); ?>
	</div>
	


	
	



	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>Lorem40 -->
	<div style="margin-top: 5em; padding-top:1em; margin-bottom: 0;">
		<article id="article1" class="article" style=" height: 18em; background-color: var(--color-theme-dark);">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2 style="padding-top: 1em; text-align: center; color: var(--color-text-light); ">Clover's Fresh</h2>
				</div>	
				<!-- <div class="flex-none">
					<small>5:20am</small>
				</div> -->	
			</div>
	
			<div class="article-body" style="width: 800px; padding-bottom:50px; margin:0 auto; color: var(--color-text-light);">
				<p style="font-size: 1.3em; padding-bottom:50px;">we pride ourselves on providing only the freshest and highest quality fruits available. From juicy berries and exotic tropical fruits to crisp apples and sweet citrus, our selection is sure to please even the most discerning taste buds. Come visit us and experience the vibrant colors, aromas, and flavors of our delicious fruits today!</p>
			</div>
		</article>

	</div>

</body>
</html>