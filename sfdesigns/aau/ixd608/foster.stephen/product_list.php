<?

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product List</title>

	<? include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>

	<script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script>
</head>
<body>

	<? include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
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
								<button data-filter="category" data-value="Bags" type="button" class="form-button">Bags</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Printers" type="button" class="form-button">Printers</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="DI" type="button" class="form-button">DI</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="LI" type="button" class="form-button">LI</button>
							</div>
						</div>
						<div class="flex-none">
							<div class="form-select">
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
			
			<div class='productlist grid gap'></div>
			
	</div>

</body>
</html>