<!DOCTYPE html>
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

        include_once "lib/php/function.php";
   

        $result = makeQuery(
            makeConn(),
             "
             SELECT *
              FROM `products`
              ORDER BY `price` ASC
              LIMIT 12
              "
          );



        ?>
    </div>
    <div class="container">
    <div class="card flat">
    <div class="grid gap">
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                    <a href="product_item.php">
                    <img src="https://media.istockphoto.com/id/92055540/photo/row-of-new-recreational-vehicles.jpg?s=612x612&w=0&k=20&c=QXBacOWQgyfZTvhiyOgp9uRpbYD6xtuJXgQapL1lDTA=" 
                    style="width: 400; height: 400;" alt="backpack"></a>
                        <figcaption>Seattle, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYJMYxJ6yJhTcifAjcVJDnQpOHOK_2aCBM9Q&usqp=CAU" style="width: 400; height: 400;" alt="backpack"></a>
                        <figcaption>Seattle, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLAOBSw0x1zJ_WWZkJbepVsxz4txip0RaHaDVxm6dAjZYo2RIWq9kcaL6J2k-iBGI0Br8&usqp=CAU" style="width: 400; height: 400;" alt="Clothing"></a>
                        <figcaption>Bellvue, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRfsDmRYb993fgzIgZGXMPzsH8g88Tue4UYw&usqp=CAU" style="width: 400; height: 400;" alt="Footwear"></a>
                        <figcaption>Lynwood, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9WJT1bGh-f0tDZPrfbikDoQz5gU6nv8YeIg&usqp=CAU" style="width: 400; height: 400;" alt="Tents"></a>
                        <figcaption>Issaqua, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                    <img src="https://images.rvs.com/cwrvrentals/files/rv_images/202650/1675894074_php63e41d3ac9f99.1280.jpg" style="width: 400; height: 400;" alt="Lighting"></a>
                        <figcaption>Renton, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSywyBAsM09vY1fDWduOT7o0FJBM_hYBBhGlgpPrBSN74_svWu9gPaMp-yIvomV2kYVDuA&usqp=CAU" style="width: 400; height: 400;" alt="Sleepingbag"></a>
                        <figcaption>Renton, WA</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-3">
                    <figure class="figure">
                         <a href="product_item.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsc3zeOCieZhvP0M6eqPO3EAHAMABo6O9wZ0rbedbt91-hLt04-zrz8jMN6GIYVo4BYAg&usqp=CAU" style="width: 400; height: 400;" alt="Pads &amp; Hammocks"></a>
                        <figcaption>Kirkland, WA</figcaption>
                    </figure>
                </div>
            </div>
</div>
</body>
</html>