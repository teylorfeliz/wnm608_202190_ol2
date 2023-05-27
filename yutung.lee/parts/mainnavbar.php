
<?php

include_once "lib/php/functions.php";

?>


<base href="http://www.yutunglee.com/Development/home/yvn86jesdiy5/public_html/Development/wnm608_202190_ol2/yutung.lee/">






<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex">
	<div class="flex-none">
		<font color="#FFC872" size="">
		<a href="mainpage.php">Pet Paradise</a>
		<!-- <h1 href="mainpage.php">Pet Paradise</h1> -->
	</div>
	</font>		
	<div class="flex-stretch"></div>
	<div class="flex-none menu-button">
		<label for="menu">&equiv;</label>
	</div>
		<nav class="nav nav-flex flex-none ">
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href="mainproduct_list.php">Product</a></li>
				<li><a href="mainabout.php">About</a></li>
				<li><a href="maincart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>	
</header>