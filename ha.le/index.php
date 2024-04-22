<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ChicHaus</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="lib/css/layout.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
							<form>
								<input type="search" class="basic-input" placeholder="What are you looking for?">
							</form>
						</div> 
					</div>
					<div class="layout-main-col display-flex">
						<!-- nav.nav>ul>li*4>a[href=#articles$]>{Link $} -->
						<nav class="nav nav-flex">
							<ul>
								<li><a href="cart.php">CART</a></li>
								<li><a href="">LOG IN</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="layout-body">

		<div class="layout-aside">
			<div>
				<nav class="flex-none nav nav-blur">
					<ul>
						<li><a href="new_drop.php">SPRING 2024</a></li>
						<li><a href="product_list.php">PRODUCT</a></li>
						<li><a href="about.php">ABOUT</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="layout-main">
			<div class="grid gap">
				
			</div>
		</div>

		</div>




	</div>	



	<footer class="layout-footer">
		<div class="footer-body">
			
			<div class="layout-aside">
				<h4>COMPANY INFO</h4>
			</div>
			
			<div class="layout-main">
				<div class="layout-main-cols">

					<div class="layout-main-col nav">
						<ul>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="contact.php">CONTACT US</a></li>
							<li><a href="policy.php">DELIVERY, SHIPPING AND RETURN</a></li>
							<li><a href="terms_conditions.php">TERMS AND CONDITIONS</a></li>
						</ul>
					</div>
			
					<div class="layout-main-col display-flex flex-align-end">
						<div class="display-flex flex-stretch newsletters">
							<div class="flex-stretch">
								<input type="text" placeholder="" class="form-input" >
							</div>
							<div class="form-control display-flex">
								<button class="form-button transparent">SUBCRIBE FOR NEWSLETTERS</button> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-credit display-flex">
			<div class="flex-none">
				<h6>© 2024 ChicHaus</h6>
			</div>
			
			<div class="flex-stretch"></div>
			<div class="flex-none">
				<h6>All rights reserved</h6>
			</div>
		</div>
			
	</footer>

</body>
</html>
















