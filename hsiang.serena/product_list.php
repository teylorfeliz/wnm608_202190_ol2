<?php
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <?php include "parts/meta.php"?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
    <script>
        query({ type: 'products_all' }).then(d => {
            $(".productlist").html(listItemTemplate(d.result));
        });
    </script>
</head>
<body>
    <?php include "parts/navbar.php"?>
    <?php include "parts/banner.php"?>
    <style>
        .title {
            margin-top: 0px;
        }
    </style>
    <div class="container margin-top-7em">
        <div class="card soft margin-top-5em">
            <h2 class="title">Shop</h2>

            <div class="form-control">
                <form action="" id="product-search" class="hotdog light">
                    <input type="search" placeholder="Search Products">
                </form>
            </div>
            <div class="form-control">
                <div class="card soft">
                    <div class="display-flex flex-wrap">
                        <div class="flex-stretch display-flex category">
                            <div class="flex-none btn-container">
                                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                            </div>
                            <div class="flex-none btn-container">
                                <button data-filter="category" data-value="Ring" type="button" class="form-button">Ring</button>
                            </div>
                            <div class="flex-none btn-container">
                                <button data-filter="category" data-value="Necklace" type="button" class="form-button">Necklace</button>
                            </div>
                            <div class="flex-none btn-container">
                                <button data-filter="category" data-value="Earrings" type="button" class="form-button">Earrings</button>
                            </div>
                            <div class="flex-none btn-container">
                                <button data-filter="category" data-value="Bracelet" type="button" class="form-button">Bracelet</button>
                            </div>
                        </div>
                        <div class="flex-none">
                            <div class="form-select sort" style="min-width: 90px;">
                                <select class="js-sort">
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                    <option value="3">Least Expensive</option>
                                    <option value="4">Most Expensive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid gap productlist'></div>
        </div>
    </div>

</body>
</html>