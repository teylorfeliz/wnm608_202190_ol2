<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <?php include "parts/meta.php"?>
</head>
<body>
    <?php include "parts/navbar.php"?>
    <style>
        .title {
            margin-top: 0px;
        }
    </style>
    <div class="container">
        <div class="card soft product-container">
            <h2 class="title">Shop</h2>
        <?php

            include_once "lib/php/functions.php";
            include_once "parts/templates.php";

            $result = makeQuery(
                makeConn(), 
                "
                    SELECT `id`, `name`, `price`, `images`, `thumbnail`
                    FROM `products`
                    ORDER BY `date_create` DESC
                    LIMIT 12;
                "
            );
            
            echo "<div class='grid gap productlist'>", array_reduce($result, 'productListTemplate'), "</div>";
        
        ?>
        </div>
    </div>

</body>
</html>