<?php include_once "lib/php/functions.php";?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>S Jewelry Box</h1>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none menu-button">
            <label for="menu">&equiv;</label>
        </div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="best_seller.php">Best Seller 🔥</a></li>
                <li><a href="product_list.php">Shop 🎁</a></li>
                <li><a href="offers.php">Offers ⚡</a></li>
                <li><a href="product_bag.php">
                    <span>Bag 🛍️</span>
                    <span class="badge"><?= makeBagBadge(); ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>