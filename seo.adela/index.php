<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php"; 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Petcrew Website</title>

	<?php include "parts/meta.php"; ?>

</head>
<body class="flush">
	
	<?php include "parts/navbar.php"; ?>

	<div class="mainslogan">
		<img src="img/pinkdog.jpeg">
	</div>

	<div class="intro_text">
			<h1>MAKING PET'S LIFE BETTER</h1>
			<p class="firstp">We make healthy and organic food for our pet.Amet laborum rem repellendus a obcaecati,Amet laborum rem repellendus a obcaecati.</p>
			<p class="firstp"> Amet laborum rem repellendus a obcaecati! </p>
			<div class="welcome-text">
			<a href="about.php" class="aboutmore"> More </a>
		    </div>
	</div>

	<div class="styleguidecontainer">
		<h2> Latest Products</h2>
			<?php

			$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = 'treat' ORDER BY `date_create` DESC LIMIT 3");

			recommendedProducts($result);

			?>

	</div>

	<div class="styleguidecontainer">
		<h2> Latest Accessory</h2>
			<?php

			recommendedCategory("accessory");

			?>

	</div>


<div class="styleguidecontainer">
		<h2> Best Sellers</h2>

	<div class="product flex">
		<div class="box box1">
			<img src="img/yellow2.jpg"> 
		</div>

		<div class="box box2">
			<img src="img/red3.jpg"> 
		</div>

		<div class="box box3">
			<img src="img/green3.jpg"> 
		</div>
	</div>
</div>

	<div class="last">
		<div class="view-window2" style="background-image:url('img/redgreenyellowtopad.png')"></div>
	</div>

	<div class="container2 display-flex">
		<article id="article4" class="article">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Newsletter</h2>
				</div>
				<div class="flex-none"><small>more→</small></div>
			</div>
			<div class="article-body">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, eaque modi qui blanditiis veritatis, ipsam rem neque sed accusamus tenetur quasi eos, ipsum optio beatae cumque debitis labore necessitatibus cupiditate sit! Consequuntur fugit, quod laborum non, magnam ipsa quasi assumenda.</p>
				<p>Aut tenetur ab quos quas non consequatur voluptatibus mollitia, ad accusamus odio repudiandae enim adipisci amet sequi velit illum quae quo reiciendis laborum quibusdam eligendi sit similique quisquam. Velit modi quos eligendi quas provident eos laudantium odit dicta laborum, dolorem!</p>
				
			</div>
		</article>
	</div>

	
		
</body>
</html>

<footer>
	Copyright © 2022 Adela Seo - AAU WNM 608 Assignment
</footer>