
<?php
	
	include_once "lib/php/functions.php";    

	?>

<header class="navbar">
	<div class="container">
			<div class="flex-none">
				<a href="index.php"><img src="img/logo.png" style="width:93px; padding:10%"></a>
			</div>
	
	<div>
        <ul class="drop-down-menu">
            <li><a href="about.php">About</a></li>
            <li><a href="product.php">Product &#9662;</a>
                <ul>
                    <li><a href="product_list.php?product=Backpacks">Backpack</a>
                    </li>
                    <li><a href="product_list.php?product=Camp_Furniture">Camp Furniture</a>
                    </li>
                    <li><a href="product_list.php?product=Clothing">Clothing</a>
                    </li>
                    <li><a href="product_list.php?product=Footwear">Footwear</a>
                    </li>
                    <li><a href="product_list.php?product=Tents">Tents</a>
                    </li>
                    <li><a href="product_list.php?product=Lighting">Lighting</a>
                    </li>
                    <li><a href="product_list.php?product=Sleeping_Bags">Sleepingbag</a>
                    </li>
                    <li><a href="product_list.php?product=Health_and_Safety">Health and Safety</a>
                    </li>
                </ul>
            </li>
            <li><a href="deals.php">Deals</a>
            </li>
            <li><a href="explore.php">Explore</a>
            </li>
            <li><a href="login.php">Login</a>
            </li>
            <li><a href="cart.php">Cart</a>
            </li>
            </ul>
	</div>
        </header>

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
						<span class="badge"><?= makeCartBadge() ?></span>
					</a></li>
				</ul>
				
			</nav>
			
		</div>
	</header> -->
	