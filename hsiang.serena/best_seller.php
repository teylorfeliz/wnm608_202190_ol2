<?php include_once "lib/php/functions.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best Seller</title>
    <?php include "parts/meta.php"?>
</head>
<body>
    <?php include "parts/navbar.php"?>
    <!-- Banner -->
    <?php include "parts/banner.php"?>
    <style>
        .title {
            margin-top: 0px;
        }
    </style>
    <div class="container margin-top-7em">
        <div class="card soft margin-top-5em">
            <h2 class="title">Our Best Seller Products</h2>
        <?php

            include_once "lib/php/functions.php";
            include_once "parts/templates.php";

            $result = makeQuery(
                makeConn(), 
                "
                    SELECT `id`, `name`, `price`, `images`, `thumbnail`
                    FROM `products`
                    WHERE `id` in (4, 7, 11);
                "
            );
            
            echo "<div class='grid gap productlist'>", array_reduce($result, 'productListTemplate'), "</div>";
        
        ?>
        </div>
    </div>

</body>
</html>