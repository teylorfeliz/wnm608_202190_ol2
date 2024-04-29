<?php

include_once "lib/php/functions.php";

?>	

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