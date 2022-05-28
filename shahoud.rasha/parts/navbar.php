<?php 
	include_once "lib/php/functions.php";

?>
<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch logo">
				<img class="logo-img" src="img/logo.jpg">
			</div>
			<div class="flex-stretch title"><a href="index.php"><h1>Gilded</h1></a></div>
			<!-- nav.nav>ul>li*4>a[href=#article$]>{link$ -->
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="flex-stretch nav main-nav">
		<ul class="container display-flex">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">Gallery</a></li>
			<li><a href="product_list.php">Products</a></li>
			<li><a href="cart.php">
				<span>Cart</span>
				<span class="badgs"><?=makeCartBadge(); ?></span>

				</a></li>
			<li><a href="styleguide/index.php">Styleguide</a></li>
			
		</ul>
	</nav>
</div>
</header>