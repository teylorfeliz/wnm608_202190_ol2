<?php

include_once "lib/php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">	
		<div class="container display-flex">
			<div class="flex-none">
				<a href="index.php">
					<img src="img/whitelogo.png" alt="logo" class="logoimg">
				</a>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">	
					<label for="menu">&equiv;</label>
			</div>
			<div class="flex-stretch navi"></div>
			<nav class="nav nav-flex flex-none">
				<ul>	
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_list.php">Shop</a></li>
				<ul class="cta">
					<li><a class="cart" href="product_cart.php">
					<span><img src="img/shoppingcart.png" class="cart_img" style="width:22px; height:22px;"></span>
					</a></li>
					<span class="badge"><?= makeCartBadge(); ?></span>
					</li><a class="login" href="login.php"><button>Log In</button></a></li>
				</ul>
				</ul>
			</nav>
		</div>
	</header>