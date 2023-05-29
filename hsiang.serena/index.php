<?php include_once "lib/php/functions.php";?>
<?php include_once "parts/templates.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>S Jewelry Box</title>

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
</header>
<body class="flush">

	<?php include "parts/navbar.php"?>
	<?php include "parts/banner.php"?>

	<!-- div.container>article.article#article$*4>h2{Article $}+div.article-body>p*3>lorem40 -->
	<div class="container content">
		<article class="article card soft margin-top-7em" id="article1">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>The Ultimate</h2>
					<h2>Jewelry Collection</h2>
				</div>
			</div>
			<div class="article-body">
				<button id="showNow">Shop Now</button>
			</div>
		</article>
		<article class="article card soft" id="article2">
			<h2>Ignite Your Dreams</h2>
			<div class="article-body">
				<p>Since the summer of 2022, founder Serena Hsiang’s passion for innovation and design, and took more than 568 days to complete her project, so try to imagine how these days must be!</p>
				<p>Her mastery of diamonds cutting has defined S Jewelry Box as the leading jewelry and accessories brand.</p>
				<p>Since the temperatures are so extreme these days, and the solar radiation is so high, Serena had the idea to create 25 unique pieces, all of them adorned with diamonds cut from the same rough stone.</p>
			</div>
		</article>
		<div class="view-window" style="background-image: url(img/girl1.jpeg);"></div>

		<div class="card soft">
		    <div class="container">
				<h2>Latest Ring</h2>
				<?php recommendedCategory("Ring");?>
			</div>
		</div>

		<div class="card dark">
			<div class="container">
				<h2>Latest Necklace</h2>
				<?php recommendedCategory("Necklace");?>
			</div>
		</div>

		<div class="card medium">
			<div class="container">
				<h2>Latest Earrings</h2>
				<?php recommendedCategory("Earrings");?>
			</div>
		</div>
		
		<div class="card">
			<div class="container">
				<h2>Latest Bracelet</h2>
				<?php recommendedCategory("Bracelet");?>
			</div>
		</div>
		<div class="card dark">
			<figure class="figure">
				<img src="img/basicfigure.jpg" alt="">
				<figcaption><a href="product_list.php" style="text-decoration: none;">Shop your look</a></figcaption>
			</figure>		
		</div>
		<div id="bestSeller">
			<div class="container">
				<h2 style="color: var(--color-neutral-light);">Best Seller</h2>
				<div class="grid gap xs-small md-medium">
					<div class="col-xs-6 col-md-3">
						<div class="card hard">
							<figure class="figure product-overlay">
								<img src="img/500ring04.jpg" alt="" class="media-image">
								<figcaption>
									<a href="product_item.php?id=4" style="text-decoration: none;">
										<div class="caption-body">
											<div>Dune Ring</div>
											<div>in 18K Gold with Diamonds</div>
											<div>$129.95</div>
										</div>
									</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="card hard">
							<figure class="figure product-overlay">
								<img src="img/500ring16.jpg" alt="" class="media-image">
								<figcaption>
									<a href="product_item.php?id=4" style="text-decoration: none;">
										<div class="caption-body">
											<div>Caramella Rainbow Stone</div>
											<div>Bracelet with Diamond</div>
											<div>$29.95</div>
										</div>
									</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="card hard">
							<figure class="figure product-overlay">
								<img src="img/500ring11.jpg" alt="" class="media-image">
								<figcaption>
									<a href="product_item.php?id=4" style="text-decoration: none;">
										<div class="caption-body">
											<div>Gelato Station Bangle</div>
											<div> in 18K Gold Multi-Gem</div>
											<div>$38.96</div>
										</div>
									</a>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="card hard">
							<figure class="figure product-overlay">
								<img src="img/500ring06.jpg" alt="" class="media-image">
								<figcaption>
									<a href="product_item.php?id=4" style="text-decoration: none;">
										<div class="caption-body">
											<div>Mini Drop Earrings</div>
											<div>in 18K Gold with Crystal</div>
											<div>$38.95</div>
										</div>
									</a>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card soft">
			<h2>ART. SCULPTURE. BEAUTY.</h2>
			<div class="article-body">
				<p>I sculpt feminine ease using shape and form in organic unity.</p>
				<p>What does having a community of women mean to you?</p>
				<p>Women continue to make history as we further establish ourselves in male-dominated fields.. 
					We’ve seen the naming of the first woman Vice President in Kamala Harris. We’ve seen the first woman coach at a Super Bowl in Katie Bowers. We’ve seen the first Black woman Supreme Court Justice in Kejanti Brown Jackson. And those are just a few of the milestones women have reached since 2020. But as we know, women have been blazing trails since long before then.
				</p>
			</div>	
		</div>

		<article class="card medium" id="article4">
			<h2>POPs of Colors</h2>
			<div class="article-body">
				<p>sapphires in every color add bold sparkle to a new array from the Envy Series collection.</p>
				<p>Quidem consectetur amet enim, animi harum veritatis aliquid voluptatibus ea </p>
				<p>modi ipsam magni rem voluptatum maxime, nemo! Iste autem, corporis doloribus voluptas veritatis architecto, suscipit veniam cum explicabo illum numquam hic!</p>
			</div>
		</article>
	</div>

</body>
<script>
	// Get the button element
	var showNowButton = document.getElementById('showNow');

	// Add a click event listener
	showNowButton.addEventListener('click', function() {
		// Navigate to the desired URL
		window.location.href = 'http://serenahsiang.com/aau/wnm608/hsiang.serena/product_list.php';
	});
</script>
</html>