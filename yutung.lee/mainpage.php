<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Paradise</title>

	
	<?php include "parts/mainmeta.php"; ?>


</head>
<body class="flush">

	<?php include "parts/mainnavbar.php"; ?>


	<div class="container">
        <div class="card">
            <!-- <h3>Basic Figures</h3> -->
            <figure class="figure">
                <img src="https://petble.care/wp-content/uploads/2021/04/PetbleCare_Blog_%E5%AF%B5%E7%89%A9%E4%BF%9D%E9%9A%AA-%E6%98%82%E8%B2%B4%E5%8C%96%E9%A9%97%E6%AA%A2%E6%9F%A5%E9%83%BDclaim%E5%88%B0_content_image.jpg" alt="">
                <!-- <figcaption>Product</figcaption> -->
            </figure>

    	</div>
    </div>

    <div class="container">
    	<h2>Dog Products</h2>
    	<?php recommendedCategory("Dog"); ?>
    	<h2>Cat Products</h2>
    	<?php recommendedCategory("Cat"); ?>
    </div>




</body>
</html>