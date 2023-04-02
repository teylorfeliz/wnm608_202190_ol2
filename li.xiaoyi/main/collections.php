<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jowelry</title>
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">	
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Jowelry</h1>
			</div>
			<div class="flex-stretch"></div>
				<nav class="flex-none nav">
				<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="collections.php">Collections</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
				</nav>
		</div>
	</header>

	<div class="container" id="navigations">
		<h2>Collections</h2>

		 <script>
            const makeNav = (classes ='') => {
                const links = ['Rings', 'Bracelets', 'Necklaces','Earrings'];
                let ran = Math.floor(Math.random()*links.length);
                document.write( `
                <div>
                    <nav class="${classes}">
                <ul>
                    ${links.reduce((r, o, i) => {
                        return r + `<li class="${ran==i? 'active' : ''}"><a herf="#">${o}</a></li>`;
                    },'')}
                </ul>
                </nav>   
                </div>    
                `);
        }
        </script>

		<div class="card soft">
			<script>makeNav('nav nav-material')</script>
		</div>

		<script>
		$("#navigations a").on("click",function(e){
			e.preventDefault();
			$(this).closest("li").addClass("active")
				.siblings().removeClass("active")
		})
		</script>

	</div>
	

	<div class="container" id ="rings">
		<h2>Rings</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Rings</div>
								<div>$299</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Necklace</div>
								<div>$499</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Bracelets</div>
								<div>$399</div>
							</div>
						</figcaption>
					</div>
				</div>
	</div>

	<div class="container" id="bracelets">
		<h2>Bracelets</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Rings</div>
								<div>$299</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Necklace</div>
								<div>$499</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Bracelets</div>
								<div>$399</div>
							</div>
						</figcaption>
					</div>
				</div>
	</div>

	<div class="container" id="necklaces">
		<h2>Necklaces</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Rings</div>
								<div>$299</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Necklace</div>
								<div>$499</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Bracelets</div>
								<div>$399</div>
							</div>
						</figcaption>
					</div>
				</div>
	</div>

	<div class="container" id="earrings">
		<h2>Earrings</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Rings</div>
								<div>$299</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Necklace</div>
								<div>$499</div>
							</div>
						</figcaption>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure product-overlay">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Bracelets</div>
								<div>$399</div>
							</div>
						</figcaption>
					</div>
				</div>
	</div>

</body>
</html>
