<?php

include_once "lib/php/functions.php";

?>
	<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<!-- <h1 style="font-family: --font-theme-title:june-expt-variable, sans-serif; color: var(--color-white);">Clover's Fresh</h1> -->
				<h1 style="font-family: --font-theme-title:june-expt-variable, sans-serif; color: var(--color-white); text-decoration:none;"><a href="index.php">Clover's Fresh</a></h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<!-- <label for="menu">&equiv;</label> -->
			</div>
	
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="web_product_list.php">Product</a></li>				
				<li><a href="web_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
		</div>
	</header>