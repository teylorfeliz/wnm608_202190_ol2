<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>

    <?php include "parts/meta.php"?>
</head>
<body>
    <style>
        .product-list {
            margin-top: 6em;
        }

    </style>

    <!-- Navigation Bar -->
    <?php include "parts/navbar.php"?>

    <!-- Banner -->
    <?php include "parts/banner.php"?>

    <div class="container">
        <div class="card soft product-list">
            <h2>Product List</h2>

            <!-- ul>li*4>a[href="product_itme.php"]{Product $} -->
            <ul>
                <li><a href="product_item.php?id=1">Product 1</a></li>
                <li><a href="product_item.php?id=2">Product 2</a></li>
                <li><a href="product_item.php?id=3">Product 3</a></li>
                <li><a href="product_item.php?id=4">Product 4</a></li>
            </ul>
        </div>
    </div>

</body>
</html>