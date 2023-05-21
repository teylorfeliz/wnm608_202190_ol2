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
<body class="flush">
	<!-- header>h1+p -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>S Jewelry Box</h1>
			</div>
			
			<div class="flex-stretch"></div>
			<!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="best_seller.php">Best Seller 🔥</a></li>
					<li><a href="product_list.php">Shop 🎁</a></li>
					<li><a href="offers.php">Offers ⚡</a></li>
					<li><a href="product_bag.php">Bag 🛍️</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<header class="banner">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>📦📦 Free standard shipping over $100</h1>
			</div>
			
			<div class="flex-stretch"></div>
			
		</div>
	</header>

	<div class="land-head">
		<img src="img/landphoto.jpg">
	</div>

	<!-- div.container>article.article#article$*4>h2{Article $}+div.article-body>p*3>lorem40 -->
	<div class="container content">
		<article class="article card soft" id="article1">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>The Ultimate</h2>
					<h2>Jewelry Collection</h2>
				</div>
			</div>
			<div class="article-body">
				<button>Shops Now</button>
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
		<div class="view-window" style="background-image: url(img/girl1.jpeg);">
	</div>

	
	<div class="container" id="article3">
	    <div class="card dark">
		<h2>Product Catalog</h2>
		<div class="grid">
		    <div class="col-6">Shiny Rings</div>
		    <div class="col-6">Round Cut Rings</div>	
		</div>
		<div class="grid gap xs-small md-medium">
		    <div class="col-4">Quality Necklace</div>
		    <div class="col-4">Long Graceful</div>
		    <div class="col-4">Short Elegant</div>

		    <div class="col-3">Beautiful Bracelet</div>
		    <div class="col-3">For your Daily use</div>
		    <div class="col-3">Party time!!!</div>
			<div class="col-3">Business Casual</div>
		</div>
		<div class="grid ten gap">
			<div class="col-xs-2">Stunning Earrings</div>
		    <div class="col-xs-2">Wedding Looks</div>
			<div class="col-xs-2">Crystal Clear</div>
			<div class="col-xs-2">Colorful mood!</div>
			<div class="col-xs-2">Eye-Catching!</div>
	    </div>
	    </div>

        <div class="card">
            <h3>Product Figures</h3>
            <figure class="figure">
                <img src="img/basicfigure.jpg" alt="">
                <figcaption>Shiny Rings</figcaption>
            </figure>

            <h3>Figure Grid</h3>
            <div class="grid gap">
                <div class="col-xs-12 col-md-4">
                    <figure class="figure">
                        <img src="img/500ring01.jpg" alt="">
                        <figcaption>Quality Necklace</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure">
                        <img src="img/500ring02.jpg" alt="">
                        <figcaption>Beautiful Bracelet</figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure">
                        <img src="img/500ring03.jpg" alt="">
                        <figcaption>Stunning Earrings</figcaption>
                    </figure>
                </div>
            </div>

            <h3>Product Grid</h3>
            <div class="grid gap">
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product">
                        <img src="img/500ring04.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Beautiful Bracelet</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product">
                        <img src="img/500ring05.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Product Name</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product">
                        <img src="img/500ring06.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Product Name</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>


            <h3>Product Overlay</h3>
            <div class="grid gap">
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product-overlay">
                        <img src="img/500ring11.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Product Name</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product-overlay">
                        <img src="img/500ring08.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Product Name</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-4">
                    <figure class="figure product-overlay">
                        <img src="img/500ring09.jpg" alt="">
                        <figcaption>
                            <div class="caption-body">
                                <div>Product Name</div>
                                <div>$32.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

	<div class="container">
		<div class="grid gap xs-small md-medium">
			<!-- <col-xs-6 class="col-md-3*4">.card>{card} -->
			<div class="col-xs-6 col-md-3">
				<div class="card hard">
					<img src="img/500-01.jpg" alt="" class="media-image">
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card hard">
					<img src="img/500-04.jpg" alt="" class="media-image">
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card hard">
					<img src="img/500-06.jpg" alt="" class="media-image">
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card hard">
					<img src="img/500-08.jpg" alt="" class="media-image">
				</div>
			</div>

		</div>
	</div>

	<div class="container" id="article4">
	    <div class="card soft">
		<h2>New products</h2>
		<div class="grid">
				<div class="col-xs-12 col-md-6">Envy Series</div>
				<div class="col-xs-12 col-md-6">Get your EX back!</div>	
		</div>
		<div class="grid">
			    <div class="col-xs-12 col-md-4 col-xl-3">Eye-Catching!</div>
			    <div class="col-xs-12 col-md-4 col-xl-6">Colorful mood!</div>
			    <div class="col-xs-12 col-md-4 col-xl-3">Wedding Looks</div>
	
			    <div class="col-3">Bride to Be Series</div>
			    <div class="col-3">Party time!!!</div>
			    <div class="col-3">Bride to Be</div>
			    <div class="col-3">Sisters</div>
				
			<div class="col-3">Cool & Fun!</div>
			<div class="col-6">column 6</div>
			<div class="col-3">column 3</div>
		</div>	
		</div>
	</div>
		<div class="container">
			<article class="article" id="article3">
				<h2>ART. SCULPTURE. BEAUTY.</h2>
				<div class="article-body">
					<p>I sculpt feminine ease using shape and form in organic unity.</p>
					<p>What does having a community of women mean to you?</p>
					<p>Women continue to make history as we further establish ourselves in male-dominated fields.. 

						We’ve seen the naming of the first woman Vice President in Kamala Harris. We’ve seen the first woman coach at a Super Bowl in Katie Bowers. We’ve seen the first Black woman Supreme Court Justice in Kejanti Brown Jackson. And those are just a few of the milestones women have reached since 2020. But as we know, women have been blazing trails since long before then.</p>
				</div>
			</article>
			<article class="card medium" id="article4">
				<h2>POPs of Colors</h2>
				<div class="article-body">
					<p>sapphires in every color add bold sparkle to a new array from the Envy Series collection.</p>
					<p>Quidem consectetur amet enim, animi harum veritatis aliquid voluptatibus ea </p>
					<p>modi ipsam magni rem voluptatum maxime, nemo! Iste autem, corporis doloribus voluptas veritatis architecto, suscipit veniam cum explicabo illum numquam hic!</p>
				</div>
			</article>
		</div>
	</div>

	<div class="container">
		<h2>Latest Ring</h2>
		<?php recommendedCategory("Ring");?>
		<h2>Latest Necklace</h2>
		<?php recommendedCategory("Necklace");?>
		<h2>Latest Earrings</h2>
		<?php recommendedCategory("Earrings");?>
		<h2>Latest Bracelet</h2>
		<?php recommendedCategory("Bracelet");?>
	</div>
</body>
</html>