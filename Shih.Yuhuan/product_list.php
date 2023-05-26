<?php
include_once "lib/php/functions.php";
				if(isset($_GET['product'])){
					$product = $_GET['product'];
				} else {
					$product = null;
				}
				

				include_once "parts/templates.php";

										


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>	

	<script>
		var product = ""
		product = <?php
			if(isset($_GET["product"])){
				switch ($_GET["product"]) {
					case 'Backpacks':
						echo "'Backpacks'";
						break;
					case 'Camp_Furniture':
						echo "'Camp_Furniture'";
						break;
					case 'Clothing':
						echo "'Clothing'";
						break;
					case 'Footwear':
						echo "'Footwear'";
						break;
					case 'Tents':
						echo "'Tents'";
						break;
					case 'Lighting':
						echo "'Lighting'";
						break;
					case 'Sleeping_Bags':
						echo "'Sleeping_Bags'";
						break;
					case 'Health_and_Safety':
						echo "'Health_and_Safety'";
						break;
					default:
						echo "'all'";
						break;
				}
			};
		?>
	</script>

	<script src="lib/js/function.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js?v=<? time()?>"></script>


	
	<div class="container">
		
			<h2><?= $_GET['product'] ?></h2>
			<hr>
			<div class="flex-stretch">
				<div class="form-select text-end my-1">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price: High to Low</option>
						<option value="4">Price: Low to High</option>							
					</select>
				</div>				
			</div>

			<div class="grid gap product-display">
			<div class="col-xs-12 col-md-3">
				<div class="card display-flex" style="align-items:start">
					<div class="form-control">
						<form class="hotdog light" id="product-search">
							<input type="search" placeholder="Search" style="width:100%">
						</form>
						
						<div class="flex-stretch">
							
							<div class="flex-none categories">
								<div class="form-control">
									<button onclick="query({type:'products',product:product}).then(showResults)" type="button"  class="form-button">All</button>
								</div>
								<div class="form-control">
									<button data-filter="category" data-value="backpacking Packs" type="button"  class="form-button">Backpacking Packs</button>
								</div>
								<div class="form-control">
									<button data-filter="category" data-value="daypacks" type="button"  class="form-button">Daypacks</button>
								</div>
							</div>

						</div>				
					</div>			
				</div>

			</div>
		
			<div class="col-xs-12 col-md-9">
				<div class='productlist grid gap'></div>			
			</div>

		</div>			

	</div>
	
	<footer class="bg-dark text-main-medium text-center mt-3 py-1">
        <div class="footer-content">
            <p>©2023 Champing.com All Rights Reserved<br>
            </p>
        </div>
        
    </footer>

</body>
</html>