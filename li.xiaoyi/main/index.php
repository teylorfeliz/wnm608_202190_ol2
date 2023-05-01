<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Home</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<?php include "../parts/navbar.php"; ?>
	<div class="container">
		<div class="card" style="text-align: center;"><img src="../img/index.jpg" alt="">
			<h2>Love Your Way</h2>
			<p>You’ll know who it’s for. You’ll know when it’s time. You’ll just know.</p>
			<h4><a href="collections.php">Explore</a></h4>

		<div class="container" id="navigations">
			<script>
            const makeNav = (classes ='') => {
                const links = ['Rings', 'Necklaces', 'Bracelets'];
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
		<script>makeNav('nav nav-material')</script>
		<script>
		$("#navigations a").on("click",function(e){
			e.preventDefault();
			$(this).closest("li").addClass("active")
				.siblings().removeClass("active")
		})
		</script>
		</div>
		<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
					<img src="../img/T1Ring.jpg" alt="">
					<figcaption>T1Ring</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
					<img src="../img/diamondsbytheyard.jpg" alt="">
					<figcaption>Diamonds by the yard</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
					<img src="../img/motherofpearl.jpg" alt="">
					<figcaption>Mother of pearl</figcaption>
				</div>
			</div>
		</div>
	</div>

</body>
</html>