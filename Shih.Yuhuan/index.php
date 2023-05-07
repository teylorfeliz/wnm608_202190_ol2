<?php include_once "lib/php/functions.php";	?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Camping & Hiking Gear Store</title>

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link href = 'https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap'  rel = 'stylesheet'  type = 'text/css' >

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>
<body>
    
    <?php include "parts/navbar.php"; ?>

	
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/img1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
    </div>



	<div class="container">	    
     <div class="card medium" style="text-align: center;">
     	<div><h1>Up to 50 % off</h1></div>
     	<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, totam? Culpa perferendis temporibus saepe eveniet. Numquam suscipit ex repudiandae voluptatibus placeat. Aperiam totam quas eveniet obcaecati voluptates molestias nemo exercitationem.</p></div>



            <!-- <h1 style="display:inline;">Up to <br>50% off</h1>
            <p style="text-align: center;" style="display:inline;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, totam? Culpa perferendis temporibus saepe eveniet. Numquam suscipit ex repudiandae voluptatibus placeat. Aperiam totam quas eveniet obcaecati voluptates molestias nemo exercitationem.</p>
             -->
    	</div>



    <h3>Top categories for you</h3>
            <div class="grid gap">
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                        <a href="product_list.php?product=Backpacks" style="text-decoration: none;"><img src="img/backpack.jpg" style="width: 400; height: 400;" alt="backpack">
                        <figcaption>Backpack</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                        <a href="product_list.php?product=Camp_Furniture" style="text-decoration: none;">
                        <img src="img/campfurniture.jpg" style="width: 400; height: 400;" alt="backpack">
                        <figcaption>Camp Furniture</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                        <a href="product_list.php?product=Clothing" style="text-decoration: none;">
                        <img src="img/clothing.jpg" style="width: 400; height: 400;" alt="Clothing">
                        <figcaption>Clothing</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                        <a href="product_list.php?product=Footwear" style="text-decoration: none;">
                        <img src="img/footwear.jpg" style="width: 400; height: 400;" alt="Footwear">
                        <figcaption>Footwear</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                        <a href="product_list.php?product=Tents" style="text-decoration: none;">
                        <img src="img/tent.jpg" style="width: 400; height: 400;" alt="Tents">
                        <figcaption>Tents</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                	<figure class="figure">
                        <a href="product_list.php?product=Lighting" style="text-decoration: none;">
                        <img src="img/lighting.jpg" style="width: 400; height: 400;" alt="Lighting">
                        <figcaption>Lighting</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                	<figure class="figure">
                    <a href="product_list.php?product=Sleeping_Bags" style="text-decoration: none;">
                    <img src="img/sleepingbag.jpg" style="width: 400; height: 400;" alt="Sleepingbag">
                    <figcaption>Sleepingbag</figcaption></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                	<figure class="figure">
                    <a href="product_list.php?product=Health_and_Safety" style="text-decoration: none;">
                    <img src="img/padsandhammocks.jpg" style="width: 400; height: 400;" alt="Health & Safe">
                        <figcaption>Health & Safe</figcaption></a>
                    </figure>
                </div>
            </div>
    </div>


</body>
</html>
