<?php
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Offers</title>

    <?php include "parts/meta.php"?>
</head>
<body>
    <style>
        .offers {
            margin-top: 7em;
        }

    </style>

    <!-- Navigation Bar -->
    <?php include "parts/navbar.php"?>

    <!-- Banner -->
    <?php include "parts/banner.php"?>

    <div class="container offers">
        <div class="card soft margin-top-5em">
            <h2 class="title">Offers</h2>
            <?php

                $result = makeQuery(
                    makeConn(), 
                    "
                        SELECT `id`, `name`, `price`, `images`, `thumbnail`
                        FROM `products`
                        WHERE `category` = 'Bundle'
                        ORDER BY `date_create` DESC;
                    "
                );
                
                echo "<div class='grid gap productlist'>", array_reduce($result, 'productListTemplate'), "</div>";
            
            ?>
        </div>
    </div>

</body>
</html>