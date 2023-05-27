<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Camping & Hiking Gear Store</title>

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css?=<?=time()?>">
    <link rel="stylesheet" href="css/carousel.css?=<?=time()?>">
    <link rel="stylesheet" href="css/drop_down_menu.css?=<?=time()?>">
    <script src="https://kit.fontawesome.com/c45d543d64.js?=<?=time()?>" crossorigin="anonymous"></script> 
	<link href = 'https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap'  rel = 'stylesheet'  type = 'text/css' >

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>
<body>
    
    <?php include("parts/navbar.php"); ?>

	
    <div class="slideshow-container">
    <div class="slideShow">
            <div class="slides">
                <div style='background-image: url("img/image1.jpg")' class="slide stage-1"></div>
                <div style='background-image: url("img/image2.jpg")' class="slide stage-2"></div>
                <div style='background-image: url("img/image3.jpg")' class="slide stage-3"></div>
                <div style='background-image: url("img/image4.jpg")' class="slide right"></div>
                <div style='background-image: url("img/image5.jpg")' class="slide"></div>
                <div style='background-image: url("img/image6.jpg")' class="slide left"></div>
            </div>
            <div class="controller">
                <button class="last"><i class="fa-solid fa-caret-left"></i></button>
                <button class="next"><i class="fa-solid fa-caret-right"></i></button>
            </div>
            <div class="control-dot">
                <button class="dot active"></button>
                <button class="dot"></button>
                <button class="dot"></button>
                <button class="dot"></button>
                <button class="dot"></button>
                <button class="dot"></button>
            </div>
            <div class="slidetxt">
                <h1>Up to 50% off clothing and gear</h1>
                <p class="text-center">*Limit 1 per transatcion. <small>Code:ILOVEMOM</small></p>
            </div>
        </div>
        <!-- <div class="mySlides fade">
            <img src="img/img1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div> -->
    </div>




    
    
    
    
    <div class="container my-3">	    
        <div class="card medium" style="text-align: center; background-color: #f4f2ed; color:#BC3100">
            <div>
                <h1>Limited time deals on camping gear</h1>
                <p style="color:#053426">Upgrade your camp setup with deals on select our sleeping bags, tents and camp furniture. Ends May 8.</p>
                <button class="basic-button mt-1"><a href="product.php">Shop the deals</a></button>
            </div>
        </div>
    </div>


    <div class="container">
        <h3>Top categories for you</h3>

        <div class="grid gap">
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Backpacks" style="text-decoration: none;"><img src="img/backpack.jpg" style="width: 400; height: 400;" alt="backpack">
                    <figcaption>Backpack</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Camp_Furniture" style="text-decoration: none;">
                    <img src="img/campfurniture.jpg" style="width: 400; height: 400;" alt="backpack">
                    <figcaption>Camp Furniture</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Clothing" style="text-decoration: none;">
                    <img src="img/clothing.jpg" style="width: 400; height: 400;" alt="Clothing">
                    <figcaption>Clothing</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Footwear" style="text-decoration: none;">
                    <img src="img/footwear.jpg" style="width: 400; height: 400;" alt="Footwear">
                    <figcaption>Footwear</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Tents" style="text-decoration: none;">
                    <img src="img/tent.jpg" style="width: 400; height: 400;" alt="Tents">
                    <figcaption>Tents</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                    <a href="product_list.php?product=Lighting" style="text-decoration: none;">
                    <img src="img/lighting.jpg" style="width: 400; height: 400;" alt="Lighting">
                    <figcaption>Lighting</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                <a href="product_list.php?product=Sleeping_Bags" style="text-decoration: none;">
                <img src="img/sleepingbag.jpg" style="width: 400; height: 400;" alt="Sleepingbag">
                <figcaption>Sleepingbag</figcaption></a>
                </figure>
            </div>
            <div class="col-xs-12 col-md-3">
                <figure class="figure product-overlay">
                <a href="product_list.php?product=Health_and_Safety" style="text-decoration: none;">
                <img src="img/health_and_safety.jpg" style="width: 400; height: 400;" alt="Health & Safe">
                    <figcaption>Health & Safe</figcaption></a>
                </figure>
            </div>
        </div>
    </div>

    <div class="container mt-3 py-1">
        <h2>Latest Products</h2>
        <?php 
        recommendedCategory("Backpacking Packs");
        ?>
    </div>

    <footer class="bg-dark text-main-medium text-center mt-3 py-1">
        <div class="footer-content">
            <p>©2023 Champing.com All Rights Reserved<br>
            </p>
        </div>
        
    </footer>

</body>

<script src="js/carousel.js"></script>
<script src="js/drop_down_menu.js"></script>
<script>
    new Carousel({
        element:$(".slideShow").eq(0),
        timing:5000
    })
</script>

</html>
