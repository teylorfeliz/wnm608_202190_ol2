<?php

include_once "lib/php/functions.php";

?>

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
					<span class="badge"><?= makeCartBadge();?></span>
				</a></li>
			</ul>
		</nav>
		</div>
	</header>