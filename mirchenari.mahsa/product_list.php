<?php

    include_once "lib/php/functions.php";
     include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Product List</title>

   
   <?php include "parts/meta.php"; ?>
  <?php include "parts/navbar.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>


    
</head>
<body>



<div class="container">
       <h2>PRODUCT LIST</h2>

         <div class="form-control">
                <form class="hotdog " id="product-search">
                    <input type="search" placeholder="Search Products">
                </form>
            </div>


                   
         <div class="form-control">
                <div class="card soft">
                        <div class="display-flex">
                
                            <div class="flex-stretch display-flex">
                              

                            <div class="flex-none">
                                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                            </div>
                          <div class="flex-none">
                                <button data-filter="category" data-value="women" type="button" class="form-button">WOMEN</button>
                            </div>
                              <div class="flex-none">
                                <button data-filter="category" data-value="men" type="button" class="form-button">MEN</button>
                            </div>
                            </div>  
 
 
               <div class="flex-none">
                            <div class="form-select">
                                <select class="js-sort">
                                    <option value="1">PRICE LOW TO HIGH </option>
                                    <option value="2">PRICE HIGH TO LOW</option>
                                 
                                </select>
                            </div>
                        </div>
                        </div>

                        </div>
              
                               </div>
                        

            
            <div class='productlist grid gap'></div>
    </div>
    

<?php include "parts/footer.php"; ?>

</body>
</html>