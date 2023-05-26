<?php
    include_once "lib/php/functions.php";

    $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ". $_GET['id'])[0];
    $bag_product = bagItemByIdAndColor($_GET['id'], $_GET['color']);
    $bag = getBag();
    $total_count = countBagItemById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Item</title>
    <?php include "parts/meta.php"?>
    <script src="js/product_thumbs.js"></script>
</head>
<body>
    <?php include "parts/navbar.php"; ?>
    <?php include "parts/banner.php"?>

    <div class="container margin-top-7em">
        <div class="card soft margin-top-5em">
            <h2> You added <?= $bag_product->color ?> <?= $product->name ?> to your bag. </h2>
            <p style="margin-top: 3em;"> There are now <?= $total_count ?> <?= $product->name ?> in your bag. </p>
            <div class="display-flex" style="margin-top: 10em;">
                <div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
                <div class="flex-stretch"></div>
                <div class="flex-none"><a href="product_bag.php">Go To Bag</a></div>
            </div>
        </div>
    </div>
</body>
</html>