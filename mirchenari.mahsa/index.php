<?php  
  include_once "lib/php/functions.php";  
     include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Home</title>

<meta name="viewport" content="width=device-width">




    <?php include "parts/meta.php"; ?>
</head>
<body>
    
<?php include "parts/navbar.php"; ?>




  <div class="container">
      
     <div class="view-window" style="background-image: url('https://fimgs.net/mdimg/secundar/o.58783.jpg')">

   </div>
 </div>
<div class="container" id="carousel">
    
        <div class="card light">
              <h3>NEW COLLECTION</h3>


   <div>
        <div class="carousel">
            <div class="slides">
                
                    
                <div class="slide center"
                    style="background:url(https://storage.covet.pics/postassets/11420162/cf10703adf877208a29e568dc027f8cd) center; background-size: 100%;background-repeat:no-repeat">
                    
                    
                </div>
                <div class="slide"
                    style="background:url(https://storage.covet.pics/postassets/11379188/ed9927129f648b5c356462fd5e316a1a)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                <div class="slide"
                    style="background:url(https://storage.covet.pics/postassets/11137341/dca0497f793c16bfe20a5e7d9e9bfd05)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                
                <div class="slide"
                    style="background:url(https://storage.covet.pics/postassets/10811572/0d7136483671a5b4f121f0e41fd00024)center; background-size: 100%;background-repeat:no-repeat">
                
                </div>
                
                <div class="slide"
                    style="background:url(https://storage.covet.pics/postassets/11190686/d2df11649ae2bba73eccb536107defd9)center; background-size: 100%;background-repeat:no-repeat">
                    
                </div>
                
                <div class="slide"
                    style="background:url(https://storage.covet.pics/postassets/8952786/27ab6d6d4aaf1c4e435bcc33222a5a67)center; background-size: 100%;background-repeat:no-repeat">
                
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
<div class="container" >


<div class=" card light ">
  <h3>BEST SELLER PRODUCTS</h3>
  <?php recommendedCategory("WOMEN"); ?>
   <h3>LATEST PRODUCTS</h3>
     <?php recommendedCategory("MEN"); ?>

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