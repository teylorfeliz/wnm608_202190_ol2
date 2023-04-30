<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";
   
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <?php include "parts/meta.php"; ?>

    	<title>Product List</title>

  
</head>
<body>

    <?php include "parts/navbar.php"; ?>

<div class="container">
 <h2>Product List</h2>
        <?php


        $result = makeQuery(
            makeConn(),
             "
             SELECT *
              FROM `products`
              ORDER BY `price` ASC
              LIMIT 12
              "
          );

        echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'),"</div>" ;

        ?>
   
            </div>
</div>
</body>
</html>