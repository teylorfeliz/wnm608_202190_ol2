<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Home</title>

<meta name="viewport" content="width=device-width">




    <?php include "parts/meta.php"; ?>
</head>
<body>
    
<?php include "parts/navbar.php"; ?>


<div class="container" id="carousel">
	
		<div class="card light">
              <h3>NEW COLLECTION</h3>


   <div>
        <div class="carousel">
            <div class="slides">
                
                    
                <div class="slide center"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat"> 
                    
                    
                </div>
                <div class="slide"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                <div class="slide"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                
                <div class="slide"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat">
                
                </div>
                
                <div class="slide"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                
                <div class="slide"
                    style="background:url(https://via.placeholder.com/500/500)center; background-size: 100%;background-repeat:no-repeat">
                
                </div>
            </div>
 
            <div class="controls">
                <div class="control-left">&lt;</div>
                <div class="control-right">&gt;</div>
                <div class="control-pagination">
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                </div>
            </div>
        </div>
    </div>

    </div>

  <div class="container">
      
     <div class="view-window" style="background-image: url('img/shop.jpeg')">

   </div>
 </div>

<div class="container" >


<div class=" card light " id="paragraphs">
  <h3>BEST SELLER</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, velit itaque dolores fugiat laudantium omnis inventore et corporis, ullam officia debitis voluptates unde eligendi minus animi ab odio voluptatum, harum!</p>
 

<div class="grid gap">
            <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS </div>
                
                    </figcaption>
                </figure>
            </div>
                  <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS </div>
                
                    </figcaption>
                </figure>
            </div>
                  <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS</div>
                
                    </figcaption>
                </figure>
            </div>
              <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS </div>
                
                    </figcaption>
                </figure>
            </div>
                  <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS </div>
                
                    </figcaption>
                </figure>
            </div>
                  <div class="col-xs-4">
                <figure class="figure product">
                     <a href="product_item.php?id=1"><img src="https://via.placeholder.com/300/300" alt=""></a>
                    <figcaption>
                    
                        <div>DETAILS</div>
                
                    </figcaption>
                </figure>
            </div>


   </div>
    
 </div>
 </div>

 </div>

      
 

<?php include "parts/footer.php"; ?>



    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
     <script type="text/javascript" src="lib/js/carousel.js"></script>
    <script>
      new Carousel({
        element: $(".carousel").eq(0),
        timing: 6000,
      });
    </script>
</body>
</html>