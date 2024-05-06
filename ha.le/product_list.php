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

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>
	
	<header>
		<div class="layout-header">
			<div class="layout-aside sitename">
				<a href="index.php"><h1>CHICHAUS</h1></a>
			</div>
				
			<div class="layout-main">
				<div class="layout-main-cols">
					<div class="layout-main-col" style="flex-direction: row;">
						<div class="form-control">
							<form id="product-search">
								<input type="search" class="basic-input" placeholder="What are you looking for?">
							</form>
						</div> 
						
					</div>
					<div class="layout-main-col display-flex">
						<!-- nav.nav>ul>li*4>a[href=#articles$]>{Link $} -->
						<nav class="nav nav-flex">
							<ul>
								<li>
									<a href="cart.php">
										<span>CART</span>
										<span class="badge"><?= makeCartBadge(); ?></span>
									</a>
								</li>
								<li><a href="">LOG IN</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	


	<div class="layout-body">

		<?php include "parts/navbar.php"; ?>

		<div class="layout-main">
			<div class="product-list-container">

				<div class="display-flex">
					<div class="form-control display-flex flex-stretch">
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
						<div class="form-select flex-none" style="margin-left: 1em">
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










