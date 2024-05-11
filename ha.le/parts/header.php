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
					
				</div>
				<div class="layout-main-col display-flex">
					<!-- nav.nav>ul>li*4>a[href=#articles$]>{Link $} -->
					<nav class="nav nav-flex">
						<ul>
							<li>
								<a href="cart.php" style="padding:  0.2em 0em 0.2em 3em;">
									<span style="font-size: 1em;">CART </span>
									<span class="badge" style="font-size: 1em;"><?= makeCartBadge(); ?></span>
								</a>
							</li>
							<li><a href="log_in.php" style="padding:  0.2em 0em 0.2em 3em;">LOG IN</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>