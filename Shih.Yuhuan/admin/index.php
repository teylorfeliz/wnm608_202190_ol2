<?php 

include "../lib/php/functions.php";

$empty_product = (object) [
    "name" =>"Trail 25 Pack",
    "brand" =>"REI Co-op",
    "category" =>"Daypacks",
    "price" =>"155.00",    
    "quantity" =>"99",    
    "description" =>"Trail 25 Pack",
    "thumbnail" =>"backpacks1101.jpg",
    "images" =>"backpacks1101.jpg"

];




// LOGIC // 
try {
    $conn = makePDOConn();

switch(@$_GET['action']) {


	case "update":
		$statement = $conn->prepare("UPDATE
		`products`
		SET
			`name`=?,
            `brand`=?,
            `category`=?,
			`price`=?,
			`quantity`=?,
			`description`=?,
			`thumbnail`=?,
			`images`=?
		WHERE `id`=?
		");
		$statement->execute([
			$_POST["product-name"],
            $_POST["product-brand"],
            $_POST["product-category"],
			$_POST["product-price"],
            $_POST["product-quantity"],			
			$_POST["product-description"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],			
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;

        case "create":
            $statement = $conn->prepare("INSERT INTO
		    `products`
		    (
			    `name`,
                `brand`,
                `category`,
			    `price`,
			    `quantity`,
			    `description`,
			    `thumbnail`,
			    `images`
                )
            VALUES (?,?,?,?,?,?,?,?)
		    ");
		    $statement->execute([
			$_POST["product-name"],
            $_POST["product-brand"],
            $_POST["product-category"],
			$_POST["product-price"],
            $_POST["product-quantity"],			
			$_POST["product-description"],
			$_POST["product-thumbnail"],
			$_POST["product-images"],			
		]);
        $id = $conn->lastInsertId();
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;

        case "delete":
            $statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
		    $statement->execute([$_GET['id']]);
            header("location:{$_SERVER['PHP_SELF']}");
            break;
        
       
    }

} catch(PDOException $e) {
    die($e->getMessage());
}

















function productListItem($r,$o) {
    return $r.<<<HTML
    <div class="card soft">
        <div class="display-flex">
            <div class="flex-none images-thumbs"><img src='img/store/$o->thumbnail'></div>
            <div class="flex-stretch p-1">$o->name</div>
            <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
        </div>    
    </div>
    HTML;
}

function showProductPage($o) {
    
    $id = $_GET['id'];
    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";
    $images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/store/$o.jpg'>";});
    // echo $images[0];

    $display = <<< HTML
        <div class="card soft">
            <h2>$o->name</h2>
            <div class="form-control">
                <strong>Brand</strong>
                <span><br>$o->brand</span>
            </div>
            <div class="form-control">
                <strong>Category</strong>
                <span><br>$o->category</span>
            </div>
            <div class="form-control">
                <strong>Price</strong>
                <span><br>&dollar;$o->price</span>
            </div>
            <div class="form-control">
                <strong>Quantity</strong>
                <span><br>$o->quantity</span>
            </div>             
            <div class="form-control">
                <strong>Description</strong>
                <span><br>$o->description</span>
            </div>
            <div class="form-control">
                <strong>Thumbnail</strong>
                <span class="images-thumbs"><br><img src="img/store/$o->thumbnail"></span>
            </div>
            <div class="form-control">
                <strong>Other Images</strong>
                <span class="images-thumbs"><br>$images</span>
            </div>
        </div>
    HTML;

    $form = <<< HTML
    <form class="card soft" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
            <h2>$addoredit Product</h2>
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-name">Name</label>
                    <input class="form-input w100" name="product-name" id="product-name" style="border-bottom:solid #053426 1px" type="text" value="$o->name" placeholder="Enter the Product Name">
                </div>
            </div>
            <div class="form-control">                
                <div class="form">
                    <label class="form-label" for="product-brand">Brand</label>
                    <input class="form-input w100" name="product-brand" id="product-brand" style="border-bottom:solid #053426 1px" type="text" value="$o->brand" placeholder="Enter the Product Brand">
                </div>
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-category">Category</label>
                    <input class="form-input w100" name="product-category" id="product-category" style="border-bottom:solid #053426 1px" type="text" value="$o->category" placeholder="Enter the Product Category">
            </div>
            </div>    
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-price">Price</label>
                    <input class="form-input w100" name="product-price" id="product-price" style="border-bottom:solid #053426 1px" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
                </div>
            </div>
            <div class="form">
                    <label class="form-label" for="product-quantity">Quanitity</label>
                    <input class="form-input w100" name="product-quantity" id="product-quantity" style="border-bottom:solid #053426 1px" type="Number" min="0" max="1000" step="1" value="$o->quantity" placeholder="Enter the Product Quantity">
                </div>
            </div>
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-price">Description</label>
                    <textarea class="form-input w100" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
                </div>
            </div>
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-thumbnail">Thumbnail</label>
                    <input class="form-input w100" name="product-thumbnail" id="product-thumbnail" style="border-bottom:solid #053426 1px" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
                </div>
            </div>
            <div class="form-control">
                <div class="form">
                    <label class="form-label" for="product-images">Other Images</label>
                    <input class="form-input w100" name="product-images" id="product-images" style="border-bottom:solid #053426 1px" type="text" value="$o->images" placeholder="Enter the Product Images">
                    
                    <!-- <input class="form-input" name="product-classes" id="product-classes" type="text" value="$images[0]" placeholder="Enter the User Classes, comma separated"> -->
                </div>
            </div>
            <div class="form-control">
                <input class="form-button" type="submit" value="Save Changes">
            </div>
        </form>
    
    HTML;

    $output = $id == "new" ? $form :
        "<div class='container grid gap'>
            <div class='col-xs-12 col-md-7'>$display</div>
            <div class='col-xs-12 col-md-5'>$form</div>
        </div>
        ";

    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

    echo <<<HTML

        <div class="container mt-2 p-1" style="display:flex;justify-content:space-between;">
            <div>$delete</div>
            <div><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
        </div>

        $output
        

    HTML;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <base href="http://joyshih.com/wnm608/Shih.Yuhuan/"> -->

	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css?=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css?=<?=time()?>">
	<link href = 'https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap'  rel = 'stylesheet'  type = 'text/css' >  
	<link rel="stylesheet" href="../css/drop_down_menu.css?=<?=time()?>">
	<script src="https://kit.fontawesome.com/c45d543d64.js?=<?=time()?>" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <base href="../">

</head>
<body>


<!-- // include "../parts/navbar.php"; -->



<header class="navbar text-main-medium">
	<div class="container">
            <div class="flex-none">
                <h1 style="font-size:26px">Product Admin</h1>
            </div>
                <div class="flex-stretch"></div>
                <nav class="nav nav-flex flex-none">
                    <ul>
                        <li>
                            <a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                        <li>
                            <a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                    </ul>
                </nav>
        </div>
        
    </header>

    <div class="container">

    <?php
            if(isset($_GET['id'])) {
              echo showProductPage(
                    $_GET['id']=="new" ?
                         $empty_product :
                         makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
            
            );
                // showProductPage();        
            } else {         
                
            ?>
            <h2>Product Lists</h2>

                 <?php 

                 $result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

                 echo array_reduce($result,'productListItem');

                 ?>

            <?php } ?>


    </div>

    <footer class="bg-dark text-main-medium text-center mt-3 py-1">
        <div class="footer-content">
            <p>©2023 Champing.com All Rights Reserved<br>
            </p>
        </div>
        
    </footer>
</body>



