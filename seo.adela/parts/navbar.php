<?php

include_once "lib/php/functions.php";

?>

<header>
			<a href="index.php">
				<img src="img/whitelogo.png" alt="logo" class="logoimg">
			</a>

			<nav>
				<ul class="nav-division">	
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_list.php">Shop</a></li>
				</ul>
			</nav>

			<ul class="cta">
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
				</li><a class="login" href="login.php"><button>Log In</button></a></li>
			</ul>
	</header>