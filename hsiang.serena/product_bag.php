<?php
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
    $bag = getBag();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bag Page</title>
    <?php include "parts/meta.php"?>
    
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container margin-top-5em">
        <h2 style="color: var(--color-lotus);"> In your Bag </h2>

        <?php
            if (count($bag)) {
        ?>
                <div class="grid gap">
                    <div class="col-xs-12 col-md-7">
                        <div class="card soft">
                            <?= array_reduce(getBagItems(), 'bagListTemplate') ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="card soft flat">
                            <?= bagTotal() ?>

                            <div class="card-section">
                                <a href="product_checkout.php" class="form-button">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            } else {
        ?> 
            <div class="card soft">
                <p>No items in bag</p>
            </div>

            <h3>Other Recommendations</h3>
            <?php recommendedAnything(6);?>
        <?php
            }
        ?>
    </div>
</body>
</html>