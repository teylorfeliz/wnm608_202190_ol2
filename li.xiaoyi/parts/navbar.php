<?php include_once "../lib/php/functions.php";?>

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Jowelry</h1>
		</div>
		<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="collections.php">Collections</a></li>
					<li><a href="account.php">Account</a></li>
					<li><a href="cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge();?></span>
					</a></li>
				</ul>
			</nav>
	</div>
</header>