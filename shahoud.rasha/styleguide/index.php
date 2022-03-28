<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">


	<meta name="viewport" content="width=device-width">
	<title>Gilded</title>

	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css">




	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	
	

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch logo">
				<img class="logo-img" src="../img/gold-watch.jpg">
			</div>
			<div class="flex-stretch title"><h1>Gilded</h1></div>
			<!-- nav.nav>ul>li*4>a[href=#article$]>{link$ -->
			<nav class="flex-stretch nav main-nav">
				<ul class="container display-flex">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About</a></li>
					<li><a href="../products.php">Products</a></li>
					<li><a href="../cart.php">Cart</a></li>
					<li><a href="index.php">Styleguide</a></li>


				</ul>
			</nav>
		</div>
	</header>


	<div class="container" id="tableofcontents">
		<h2>Table of Contents</h2>
		<div class="card soft">
			<nav class="nav tableofcontents">
				<ul>
					<li><a href="#colorscheme">Color Scheme</a></li>
					<li><a href="#typography">Typography</a></li>
					<ul>
						<li><a href="#headings">Headings</a></li>
						<li><a href="#paragraphs">Paraghraphs</a></li>
					</ul>
					<li><a href="#typography">Cards</a></li>
					<li><a href="#viewwindow">View window</a></li>
					<li><a href="#navigation">Navigation</a></li>
					<li><a href="#gridsystem">Grid System</a></li>
					<li><a href="#flexsystem">Flex System</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#forms">Forms</a></li>
					<ul>
						<li><a href="#inputs">Inputs</a></li>
						<li><a href="#labels">Labels</a></li>
						<li><a href="#controls">Controls</a></li>
						<li><a href="#buttons">Buttons</a></li>
						<li><a href="#hotdog">Hotdog</a></li>
					</ul>
				</ul>
			</nav>
		</div>
	</div>

	<div class="container">
		<h2>Color Scheme</h2>

		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<div class="colorscheme offwhite">Offwhite:  #F4F4F4</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme mainlight">Main Light: #F9F0A6</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme mainmediumlight">Main Medium Light:  #D5974D</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme main-medium">Main Medium: #FCC435</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme main-dark">Main Dark: #4D201E</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme neutral-light">Neutral Light: #EEE </div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme neutral-medium">Neutral Medium: #999</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="colorscheme neutral-dark">Neutral Dark: #555</div>
			</div>

		</div>
		<div class="container" id="typography">
			<h2>Typography</h2>

			<div class="card soft" id="headings">

				<h3>Headings</h3>
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
			</div>
			<div class="card soft" id="paragraphs">
				<h3>Paragraphs</h3>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit numquam aspernatur atque natus modi ratione quam esse! Ratione blanditiis, porro illo temporibus eum optio repellat tempora odit, ad animi consequuntur?</p>
				<p>Doloremque, tempore rem! Assumenda officiis voluptatibus quam minima quasi! Totam veniam minima nesciunt ut quo facere odit sint ex ab, quas accusantium recusandae obcaecati dolor, ipsam quaerat accusamus maxime dolore!</p>
				<p>Iusto iure rerum in perspiciatis minima quae nam quibusdam optio error sunt! Voluptate id, error maiores repellat mollitia vitae. Recusandae molestiae omnis labore corrupti sed illo dolores dolorem animi odio!</p>
			</div>
		</div>

		<div class="container">
			<h2>Cards</h2>

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<div class="card">Card</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card soft">Card Soft</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card hard">Card Hard</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card flat">Card Flat</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card dark">Card Dark</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="card medium">Card Medium</div>
				</div>

			</div>

			<h2>View Window</h2>
			<div class="view-window" style="background-image: url(../img/gold.jpeg);"></div>





			<div class="container" id="navigations">
				<h2>Navigations</h2>

				<script>
					const makeNav = (classes='') => {
						const links = ['home', 'store','about'];
						let ran = Math.floor(Math.random()*links.length);
						document.write(`
							<div>
							<nav class="${classes}">
							<ul>
							${links.reduce((r,o,i)=>{
								return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
							},'')}
							</ul>
							</nav>
							</div>	
							`);
					}
				</script>

				<div class="card soft">
					<h3>Basic Nav</h3>
					<script>makeNav('nav')</script>
				</div>





				<div class="card soft">
					<h3>Flex Nav</h3>
					<script>
						makeNav('nav nav-flex')
					</script>



				</div>


				<div class="card soft">
					<h3>Stretch Nav</h3>
					<script>
						makeNav('nav nav-stretch')
					</script>

				</div>
			</div>

			<div class="card soft">
				<h3>Pills Nav</h3>
				<script>
					makeNav('nav nav-pills')
				</script>
			</div>


			<div class="card soft">
				<h3>Crumbs Nav</h3>
				<script>
					makeNav('nav nav-crumbs')
				</script>
			</div>


			<div class="card soft">
				<h3>Material Nav</h3>
				<script>
					makeNav('nav nav-material')
				</script>
			</div>


			<script>
				$("#navigations a").on("click",function(e){
					e.preventDefault();
					$(this).closest("li").addClass("active")
					.siblings().removeClass("active")
				})
			</script>

		</div>


		<div class="container">
			<h2>Grid System</h2>
			<div class="container">
				<div class="grid gap xs-small md-meduim">
					<div class="col-xs-6 col-md-3"><div class="card soft">
						<img src="../img/annie-claude-unsplash.jpg" alt="" class="media-image">
					</div></div>
					<div class="col-xs-6 col-md-3"><div class="card soft">
						<img src="../img/annie-claude-unsplash.jpg" alt="" class="media-image">
					</div></div>
					<div class="col-xs-6 col-md-3"><div class="card soft">
						<img src="../img/annie-claude-unsplash.jpg" alt="" class="media-image">
					</div></div>
					<div class="col-xs-6 col-md-3"><div class="card soft">
						<img src="../img/annie-claude-unsplash.jpg" alt="" class="media-image">
					</div></div>

				</div>
			</div>



			<div class="container">
				<div class="card soft">
					<h2>Responsive Grid</h2>

					<div class="grid">

						<div class="col-xs-3">column 3</div>
						<div class="col-xs-3"> column 3</div>
						<div class="col-xs-3"> column 3</div>

					</div>

				</div>
			</div>

		</div>


		<script>
			const makeTable = (classes='') =>{
				const head =[ 'ID','Office','Name','Email','Phone'];
				const body =[
				['522','H M', 'khsdbk@kjdxn.ljkf','938-303-9382'],
				['522','H M', 'khsdbk@kjdxn.ljkf','938-303-9382'],
				['522','H M', 'khsdbk@kjdxn.ljkf','938-303-9382'],
				['522','H M', 'khsdbk@kjdxn.ljkf','938-303-9382'],
				['522','H M', 'khsdbk@kjdxn.ljkf','938-303-9382'],
				];

	// let ran = Math.floor(Math.random()*links.length);
	document.write(`
		<table class="${classes}">
		<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
		<tbody>${body.reduce((r,o,i)=>r+
			`<tr>${
				[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
			}</tr>`,'')
	}</tbody>
	</table>
	`);
}
</script>




<div class="container">
	<h2>Tables</h2>
	<div class="card soft">
		<h3>Basic Table</h3>

		<script>makeTable("table")</script>
	</div>




	<div class="card soft">
		<h3>Striped Table</h3>

		<script>makeTable("table striped")</script>
	</div>


	<div class="card soft">
		<h3>Striped Lined Vertical</h3>

		<script>makeTable("table lined vertical")</script>
	</div>



	<div class="card soft">
		<h3>Striped Lined Horizontal</h3>

		<script>makeTable("table lined horizontal")</script>
	</div>


	<div class="card soft">
		<h3>Combination</h3>

		<script>makeTable("table lined striped border vertical")</script>
	</div>

	<div class="card soft">
		<h3>table lined All</h3>

		<script>makeTable("table lined all")</script>
	</div>


	<div class="card soft">
		<h3>Striped Lined Boarder</h3>

		<script>makeTable("table lined border")</script>
	</div>



	<h2 id="figures">Figures</h2>
	<div class="card">
		<h3>Basic Figure</h3>
		<figure class="figure">
			<img src="../img/fig-1.jpeg">
			<figcaption>Product</figcaption>
		</figure>
	</div>


	<h3>Figure Grid</h3>
	<div class="grid gap">

		<div class="col-xs-12 col-md-4"><figure class="figure">
			<img src="../img/fig-1.jpeg">
			<figcaption>Product</figcaption>
		</figure></div>


		<div class="col-xs-12 col-md-4"><figure class="figure">
			<img src="../img/fig-1.jpeg">
			<figcaption>Product</figcaption>
		</figure></div>



		<div class="col-xs-12 col-md-4"><figure class="figure">
			<img src="../img/fig-1.jpeg">
			<figcaption>Product</figcaption>
		</figure></div>


	</div>


	<h3>Product Grid</h3>
	<div class="grid gap">
		<div class="col-xs-12 col-md-4"><figure class="figure Product">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div>Product Name</div>
				<div>3.99$</div>
			</figcaption>
		</figure></div>

		<div class="col-xs-12 col-md-4"><figure class="figure product">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div>Product Name</div>
				<div>3.99$</div>
			</figcaption>
		</figure></div>


		<div class="col-xs-12 col-md-4"><figure class="figure product">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div>Product Name</div>
				<div>3.99$</div>
			</figcaption>
		</figure></div>


	</div>


	<h3>Product Overlay</h3>
	<div class="grid gap">
		<div class="col-xs-12 col-md-4"><figure class="figure product-overlay">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>3.99$</div>
				</div>
			</figcaption>
		</figure></div>


		<div class="col-xs-12 col-md-4"><figure class="figure product-overlay">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>3.99$</div>
				</div>
			</figcaption>
		</figure></div>


		<div class="col-xs-12 col-md-4"><figure class="figure product-overlay">
			<img src="../img/fig-1.jpeg">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>3.99$</div>
				</div>
			</figcaption>
		</figure></div>


	</div>




	<div class="container" id="forms">
		<h2>Forms</h2>


		<h3>Inputs</h3>

		<div class="card soft">
			<h3>Default Inputs</h3>
			<form>
				<input type="text"><br>
				<input type="number"><br>
				<input type="password"><br>
				<input type="url"><br>
				<input type="email"><br>
				<input type="datetime-local"><br>
				<input type="date"><br>
				<input type="search"><br>


			</form>

			<h3>Form Input</h3>

			<form>
				<input type="text" placeholder="Text" class="form-input">
				<input type="number" placeholder="Number" class="form-input">
				<input type="password" placeholder="Password" class="form-input">
				<input type="search" placeholder="Search" class="form-input">
			</form>


			<h3>Form Label</h3>

			<form>
				<label class="form-label">Example</label>
				<input type="text" placeholder="Text" class="form-input">
				<label class="form-label">Example</label>
				<input type="number" placeholder="Number" class="form-input">
				<label class="form-label">Example</label>
				<input type="password" placeholder="Password" class="form-input">
				<label class="form-label">Example</label>
				<input type="search" placeholder="Search" class="form-input">
			</form>


			<h3>Form Control</h3>

			<form>
				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="text" placeholder="Text" class="form-input">
				</div>

				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="number" placeholder="Number" class="form-input">
				</div>

				<div class="form-control">
					<label class="form-label">Example</label>
					<input type="password" placeholder="Password" class="form-input">
				</div>

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Example</label>
					</div>

					<div class="flex-stretch">
						<input type="search" placeholder="Search" class="form-input">
					</div>

					<div class="flex-none">
						<label class="form-label">Example</label>
					</div>

					<div class="flex-stretch">
						<input type="search" placeholder="Search" class="form-input">
					</div>
				</div>
			</form>

			<h3>Buttons</h3>
			<div class="card soft">
				<h3>Default Buttons</h3>
				<button>Button</button>

				<h3>Form Buttons</h3>
				<div class="form-control">
					<button type="button" class="form-button">Button</button>
				</div>

				<div class="form-control">
					<input type="button" class="form-button" value="Input">
				</div>

				<div class="form-control">
					<a href="#" class="form-button">Anchor</a>
				</div>

			</div>


			<h2> Hotdog</h2>
			<div class="card soft">
				<div class="form-control">
					<form>
						<input type="search" class="hotdog" placeholder="search">
					</form>
				</div>


				<div class="form-control">
					<form>
						<input type="search" class="hotdog dark" placeholder="search">
					</form>
				</div>


				<div class="form-control">
					<form class="card dark">
						<input type="search" class="hotdog light" placeholder="search">
					</form>
				</div>

				<div class="form-control">
					<form class="hotdog">
						<span>&equiv;</span>
						<input type="search" placeholder="search">
					</form>
				</div>


				<div class="form-control">
					<form class="hotdog">
						<input type="search" placeholder="search">
						<span>&equiv;</span>
					</form>
				</div>
			</div>


			<h2 id="select">Select</h2>
			<div class="card soft">
				<div class="form-select">
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="display-flex">
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<div class="form-select">
							<select>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<h2 id="checkboxes">Check Boxes</h2>
			<div class="card soft">

				<label>Label <input type="checkbox" id="input-1"></label>
				<lable for="input-1">Lable</lable>

			</div>	

			<h2 id="checkboxes">Check Boxes</h2>
			<div class="favorite">
				<input type="checkbox" id="heart-example" class="hidden">
				<label for="heart-example">&hearts;</label>
			</div>

			<h3>Toggle</h3>

			<div class="toggle">
				<input type="checkbox" id="toggle-1" class="hidden">
				<label for="toggle-1"></label>
			</div>

			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<label for="toggle-2" class="form-label">Display Warning</label>
				</div>
				<div class="flex-none">
					<div class="toggle" style="font-size: 2em;">
						<input type="checkbox" id="toggle-2" class="hidden">
						<label for="toggle-2" style="font"></label>
					</div>
				</div>
			</div>





		</div>

		<footer class="footer">

			
			<p>Contact Us</p>
			<a href="https://www.instagram.com/rasha.shahoud.design/"><img src="../img/instagram.png" style="width: 40px;"></a>
			<a href="https://www.instagram.com/rasha.shahoud.design/"><img src="../img/email.png" style="width: 40px;"></a>

			<p>Copyright © 2022 Rasha Alzaitoun Shahoud - AAU WNM 608 Assignment</p>
			
		</footer>

	</body>
	</html>