<?php

include "../lib/php/functions.php";


$empty_product = (object)[
	"name" => "Bubble Light",
	"designer" => "Balzer Balzer Studio",
	"price" => "2150",
	"description" => "Balzer Balzer is a German creative studio which operates from Berlin. ",
	"thumbnail" => "bubble_light_thumb.jpg",
	"images" => "bubble_light_1.jpg",
	"dispatch" => "Dispatched within 8-10 weeks",
	"materials" => "Hand Blown Glass",
	"dimensions" => "H: 80cm (31.4), L: 114cm (44.8), D: 98cm (38.5)",
	"category" => "light"
];




// LOGIC


try {
	$conn = makePDOConn();
	if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET 
					`name`=?,
					`designer`=?,
					`price`=?,
					`description`=?,
					`thumbnail`=?,
					`images`=?,
					`dispatch`=?,
					`materials`=?,
					`dimensions`=?,
					`category`=?,
					`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-designer'],
				$_POST['product-price'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_POST['product-dispatch'],
				$_POST['product-materials'],
				$_POST['product-dimensions'],
				$_POST['product-category'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`designer`,
					`price`,
					`description`,
					`thumbnail`,
					`images`,
					`dispatch`,
					`materials`,
					`dimensions`,
					`category`,
					`date_modify`,
					`date_create`
				)
				VALUE (?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-designer'],
				$_POST['product-price'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_POST['product-dispatch'],
				$_POST['product-materials'],
				$_POST['product-dimensions'],
				$_POST['product-category']
			]);
			$id = $conn->lastInsertID();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
	}
} catch(PDOException $e) {
	die($e->getMessage());
}







// TEMPLATES 

function productListItem($r,$o) {
return $r.<<<HTML
<div class="display-flex list" style="width: 50%;">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="product image">
	</div>
	<div class="flex-stretch"><h5 style="margin-top: 0; margin-left: 0.5em; padding: 0;">$o->name</h5></div>
	<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button small-button transparent">Edit</a>
	</div>
</div>

HTML;
}



function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

// heredoc
$display =<<<HTML
<div style="width: 90%;">
	<div>
		<div class="space"></div>
		<h3>$o->name</h3>
		<div>
			<label class="form-label space-before-paragraph">Designer</label>
			<span>$o->designer</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Price</label>
			<span>&dollar;$o->price</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Description</label>
			<span>$o->description</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Thumbnail</label>
			<span class="images-thumbs"><img src='img/$o->thumbnail'></span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Other Images</label>
			<span class="images-thumbs">$images</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Dispatch Time</label>
			<span>$o->dispatch</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Materials</label>
			<span>$o->materials</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Dimensions</label>
			<span>$o->dimensions</span>
		</div>
		<div>
			<label class="form-label space-before-paragraph">Category</label>
			<span>$o->category</span>
		</div>
	</div>

	<div class="space"></div>
	<div class='form-control'>
		<div><button class="form-button" style="background-color: var(--color-neutral-light); color: var(--color-neutral-medium);">$delete</button></div>
	</div>
</div>
HTML; 


$form = <<<HTML
<div class="card hard">
	<div>
		<h4 class="space-after-paragraph">$addoredit  Product</h4>
		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

			<div class="form-control">
				<label class="form-label" for="product-name">NAME</label>
				<input type="text" placeholder="Enter product name" class="form-input" name="product-name" id="product-name" value="$o->name">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-designer">DESIGNER</label>
				<input type="text" placeholder="Enter name of the designer" class="form-input" name="product-designer" id="product-designer" value="$o->designer">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-price">PRICE</label>
				<input type="number" min="0" max="100000" step="0.01" placeholder="Enter product price" class="form-input" name="product-price" id="product-price" value="$o->price">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-description">DESCRIPTION</label>
				<textarea type="text" placeholder="Enter product description" class="form-input" name="product-description" id="product-description" style="resize: none; height:120px">$o->description</textarea>
			</div>

			<div class="form-control">
				<label class="form-label" for="product-thumbnail">THUMBNAIL</label>
				<input type="text" placeholder="Enter product thumbnail" class="form-input" name="product-thumbnail" id="product-thumbnail" value="$o->thumbnail">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-images">OTHER IMAGES</label>
				<input type="text" placeholder="Enter other product images" class="form-input" name="product-images" id="product-images" value="$o->images">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-dispatch">DISPATCH TIME</label>
				<input type="text" placeholder="Enter dispatch time" class="form-input" name="product-dispatch" id="product-dispatch" value="$o->dispatch">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-materials">MATERIALS</label>
				<input type="text" placeholder="Enter product materials" class="form-input" name="product-materials" id="product-materials" value="$o->materials">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-dimensions">DIMENSIONS</label>
				<input type="text" placeholder="Enter product dimensions" class="form-input" name="product-dimensions" id="product-dimensions" value="$o->dimensions">
			</div>

			<div class="form-control">
				<label class="form-label" for="product-category">CATEGORY</label>
				<input type="text" placeholder="Enter category" class="form-input" name="product-category" id="product-category" value="$o->category">
			</div>

			<div class="space"></div>
			<div class="form-control">
				<input type="submit" class="form-button" value="Save">
			</div>
		</form>
	</div>
</div>


HTML;


$output = $id == "new" ? 
	"<div class='layout-main-cols'>
		<div class='layout-main-col'>
			<nav class='nav nav-crumbs'>
				<div class='display-flex'><a href='{$_SERVER['PHP_SELF']}' style='line-height: 1em'>Back</a></div>
			</nav>
		</div>
		<div class='layout-main-col'>
			$form
		</div>
	</div>" : 

	"<div class='layout-main-cols'>
		<div class='layout-main-col'>
			<nav class='nav nav-crumbs'>
				<div class='display-flex'><a href='{$_SERVER['PHP_SELF']}' style='line-height: 1em'>Back</a></div>
			</nav>
			$display
		</div>
		<div class='layout-main-col'>
			$form
		</div>
	</div>"; 

echo <<<HTML
$output
HTML;
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header>
		<div class="layout-header">
			<div class="layout-aside sitename">
				<a href="index.php"><h1 style="color: var(--color-neutral-medium);">CHICHAUS</h1></a>
			</div>
				
			<div class="layout-main">
				<div class="layout-main-cols">
					<div class="layout-main-col" style="flex-direction: row;">
						<div>
							<a href="admin/index.php"><h3 style="font-family: var(--font-sans); line-height: 1.3em">PRODUCT ADMIN</h3></a>
						</div> 
						
					</div>
					<div class="layout-main-col display-flex flex-align-center">
						<nav class="nav nav-crumbs">
							<ul>
								<li><a href="<?= $_SERVER['PHP_SELF'] ?> ">PRODUCT LIST</a></li>
								<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">ADD NEW PRODUCT</a></li>
							</ul>
						</nav> 
					</div>
				</div>
			</div>
		</div>
	</header>




	<div class="layout-body">

		<div class="layout-aside"></div>

		<div class="layout-main">
			<?php 

			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new" ?
						$empty_product : 
						makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
					);
			} else {

				?>

				<div class="layout-main-cols">
					<div class="layout-main-col">
						<h4 class="space-after-paragraph">Product List</h4>

						<?php

						$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");

						echo array_reduce($result,'productListItem');
						}

						?>
					</div>
				</div>
			</div>
		</div>
	</div>




	<footer class="layout-footer" style="background-color: var(--color-main-dark);">
		<div class="footer-credit display-flex">
			<div class="flex-none">
				<h6>© 2024 ChicHaus</h6>
			</div>
			
			<div class="flex-stretch"></div>
			<div class="flex-none">
				<h6>All rights reserved</h6>
			</div>
		</div>
			
	</footer>


</body>
