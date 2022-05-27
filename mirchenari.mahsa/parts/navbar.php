<?php


    include_once "lib/php/functions.php";
    ?>


    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>NIMANY</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="product_list.php">SHOP</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                      <li><a href="product_cart.php">
                        <span>CART</span>
                     <span class="badge"><?= makeCartBadge(); ?></span>


                      </a></li>
                </ul>
            </nav>
        </div>
    </header>