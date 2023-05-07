
<?php

include_once "lib/php/functions.php";

?>


<base href="http://www.yutunglee.com/Development/home/yvn86jesdiy5/public_html/Development/wnm608_202190_ol2/yutung.lee/">



<header class="navbar">
	<div class="container display-flex">
	<div class="flex-none">
		<h1>Pet Paradise</h1>
	</div>		
	<div class="flex-stretch"></div>
		<!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
		<nav class="flex-none nav">
			<ul class="container display-flex">
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