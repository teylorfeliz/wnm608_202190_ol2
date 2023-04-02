<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clover's Fresh</title>


	<!-- meta -->
	<?php include "parts/web_meta.php"; ?>
</head>
<body>
	
	<!-- header> -->
	<?php include "parts/header.php"; ?>



	<div class="container">
		<!-- <h2 id="figures">Figures</h2> -->

	<div class="card">
		<!-- <h3>Basic Figure</h3> -->

		<figure class="figure product-overlay">
			<img src="http://via.placeholder.com/600x300" alt="">
			<!-- <figcaption>Product</figcaption> -->
		</figure>
	</div>
	</div>

	<!-- product -->
	<?php include "parts/products.php"; ?>


	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>Lorem40 -->
	<div style="margin-top: 5em; padding-top:1em; margin-bottom: 0;">
		<article id="article1" class="article" style=" height: 18em; background-color: var(--color-theme-dark);">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2 style="padding-top: 1em; text-align: center; color: var(--color-text-light); ">Article 1</h2>
				</div>	
				<!-- <div class="flex-none">
					<small>5:20am</small>
				</div> -->	
			</div>
	
			<div class="article-body" style="width: 800px; padding-bottom:20px; margin:0 auto; color: var(--color-text-light);">
				<p style="font-size: 1.3em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quas, odio non, accusantium sapiente, libero laboriosam eveniet repudiandae aspernatur alias distinctio provident? Quidem vitae dolores, eaque aspernatur illo architecto ut temporibus, tempore! Amet, tempore autem? Neque unde suscipit quidem totam.</p>
			</div>
		</article>

	</div>

</body>
</html>