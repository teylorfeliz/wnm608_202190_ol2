<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,200,0,-25" />

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<script src="js/script.js"></script>

</head>
<body>
	<header style="">
		<div class="layout-header">
			<div class="layout-aside sitename">
				<a href="index.php"><h1>CHICHAUS</h1></a>
			</div>
				
			<div class="layout-main">
				<div class="layout-main-cols">
					<div id="large-screen-search-bar" class="layout-main-col" style="flex-direction: row;">
						<div class="form-control">
							<form id="product-search" class="search-bar">
								<input type="search"
								placeholder="What are you looking for?" class="search-bar-input">
								<button type="submit" for="product-search" class="search-bar-button"><span class="material-symbols-outlined" style="margin: 0;">search</span></button>
							</form>
						</div> 
					</div>
					<div class="layout-main-col display-flex">
						<nav class="nav nav-flex">
							<ul>
								<li><a href="log_in.php">LOG IN</a></li>
								<li>
									<a href="cart.php">
										CART
										<span class="badge"><?= makeCartBadge(); ?></span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div id="small-screen-search-bar" class="layout-main-col" style="flex-direction: row;">
						<div class="form-control">
							<form id="small-screen-product-search" class="search-bar">
								<input type="search"
								placeholder="What are you looking for?" class="search-bar-input">
								<button type="submit" for="small-screen-product-search" class="search-bar-button"><span class="material-symbols-outlined" style="margin: 0;">search</span></button>
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</header>
	
	


	<div class="layout-body">
		<div class="layout-aside product-list-page" style="background-color: var(--color-white);">
			<div class="flex-none menu-button">
				<label for="menu" class="material-symbols-outlined">menu</label>
			</div>
			<input type="checkbox" id="menu" class="hidden">	
			<div class="menu">
				<nav class="flex-none nav nav-blur">
					<ul>
						<li><a href="new_drop.php">NEWEST DROP</a></li>
						<li><a href="product_list.php">ALL PRODUCTS</a></li>
						<li><a href="about.php">ABOUT</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="layout-main">
			<div class="product-list-container">

				<div class="display-flex sorting-bar">
					<div class="form-control display-flex flex-stretch" style="line-height: 1em;"> 
						<div class="flex-none" >
							<button data-filter="category" data-value="" type="button" class="form-button small-button transparent">All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="Seat" type="button" class="form-button small-button transparent">Seat</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="table" type="button" class="form-button small-button transparent">Table</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="light" type="button" class="form-button small-button transparent">Light</button>
						</div>
					</div>

					<div class="form-control flex-none">
						<div class="form-select flex-none">
							<select class="js-sort"> 
								<option value="1" >Newest</option>
								<option value="2" >Oldest</option>
								<option value="3" >Highest Price</option>
								<option value="4" >Lowest Price</option>
							</select>
						</div>
					</div>

				</div>
				
				<div class="space"></div>
				<div class='productlist grid gap'></div>

			</div>
		</div>
	</div>


	<?php include "parts/footer.php"; ?>

</body>
</html>










