
<?php
	
	include_once("lib/php/functions.php");    

	?>

<header class="navbar">
	<div class="container">
			<div class="flex-none">
				<a style="width:93px; padding:1rem 0" href="index.php"><img style="object-fit:contain;height:100%; width:100%" src="img/logo.png"></a>
			</div>
	
            
            <a data-target="#drop-down-menu" class="btn-menu"><i class="fa-solid fa-bars text-main-medium"></i></a>

            <ul id="drop-down-menu" class="drop-down-menu hide">
                <li><a href="about.php">About</a></li>
                <li>
                    <div class="dropdown-menu hide">
                        <button class="dropdown-btn text-main-medium">Product <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="dropdown-body p-1">
                            <div class=""><a href="product.php">All</a></div>
                            <div class=""><a href="product_list.php?product=Backpacks">Backpack</a></div>
                            <div class=""><a href="product_list.php?product=Camp_Furniture">Camp Furniture</a></div>
                            <div class=""><a href="product_list.php?product=Clothing">Clothing</a></div>
                            <div class=""><a href="product_list.php?product=Footwear">Footwear</a></div>
                            <div class=""><a href="product_list.php?product=Tents">Tents</a></div>
                            <div class=""><a href="product_list.php?product=Lighting">Lighting</a></div>
                            <div class=""><a href="product_list.php?product=Sleeping_Bags">Sleepingbag</a></div>
                            <div class=""><a href="product_list.php?product=Health_and_Safety">Health and Safety</a></div>
                        </div>           
                    </div>
                </li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="cart.php">Cart
                    <span class="badge"><?= makeCartBadge() ?></span>
                </a></li>
            </ul>

            <!-- <ul id="drop-down-menu" class="drop-down-menu hide">
                <li><a href="about.php">About</a></li>
                <li><a href="product.php">Product &#9662;</a>
                    <ul>
                        <li><a href="product.php">All</a></li>
                        <li><a href="product_list.php?product=Backpacks">Backpack</a></li>
                        <li><a href="product_list.php?product=Camp_Furniture">Camp Furniture</a></li>
                        <li><a href="product_list.php?product=Clothing">Clothing</a></li>
                        <li><a href="product_list.php?product=Footwear">Footwear</a></li>
                        <li><a href="product_list.php?product=Tents">Tents</a></li>
                        <li><a href="product_list.php?product=Lighting">Lighting</a></li>
                        <li><a href="product_list.php?product=Sleeping_Bags">Sleepingbag</a></li>
                        <li><a href="product_list.php?product=Health_and_Safety">Health and Safety</a></li>
                    </ul>
                </li>
                <li><a href="deals.php">Deals</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul> -->
	</div>
</header>

<script src="js/drop_down_menu.js"></script>
<script src="js/dropdown.js"></script>
<script>
    new DropDownMenu($(".btn-menu").eq(0)[0])
    new DropDown($(".dropdown-menu").eq(0)[0])
</script>
<!-- <header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<a href="index.php"><img src="img/logo.png" style="width:85px; padding:15%"></a>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="deals.php">Deals</a></li>
					<li><a href="explore.php">Explore</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="cart.php">
						<span>Cart</span>
						<span class="badge"><?=makeCartBadge() ?></span>
					</a></li>
				</ul>
				
			</nav>
			
		</div>
	</header> -->
	