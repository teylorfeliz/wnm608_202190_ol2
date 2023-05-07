<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Paradise</title>

	
	<?php include "parts/mainmeta.php"; ?>


</head>
<body>

	<?php include "parts/mainnavbar.php"; ?>


	<div class="container">
        <div class="card">
            <!-- <h3>Basic Figures</h3> -->
            <figure class="figure">
                <img src="https://petble.care/wp-content/uploads/2021/04/PetbleCare_Blog_%E5%AF%B5%E7%89%A9%E4%BF%9D%E9%9A%AA-%E6%98%82%E8%B2%B4%E5%8C%96%E9%A9%97%E6%AA%A2%E6%9F%A5%E9%83%BDclaim%E5%88%B0_content_image.jpg" alt="">
                <!-- <figcaption>Product</figcaption> -->
            </figure>

    	</div>
    </div>

<!-- 	<div class="container">
		<div class="card">
			<figure class="figure product-overlay">
				
			</figure>
		</div>
	</div>
 -->

<!-- 
 	<div class="container" id="navigations">
 		 <script>
            const makeNav = (classes = '') => {
                const links = ['home', 'store', 'about'];
                let ran = Math.floor(Math.random() * links.length);
                document.write(`
                <div>
                    <nav class="${classes}">
                <ul>
                    ${links.reduce((r, o, i) => {
                    return r + `<li class="${ran == i ? 'active' : ''}"><a herf="#">${o}</a></li>`;
                }, '')}
                </ul>
                    </nav>   
                </div>    
                `);
            }
        </script>

   <div class="card soft">
        <h3>Meterial Nav</h3>

        <script>makeNav('nav nav-material') </script>
    </div>


    <script>
       	$("#navigations a").on("click", function (e) {
                e.preventDefault();
                $(this).closest("li").addClass("active")
                    .siblings().removeClass("active")
            })
    </script>

 </div>

 	<div class="container">
		<div class="grid gap">
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
           <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
             <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
           <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-md-4">
                <figure class="figure product">
                    <img src="http://via.placeholder.com/400x400?text=product" alt="">
                    <figcaption>
                        <div>Product Name</div>
                        <div>$3.99</div>
                    </figcaption>
                </figure>
            </div>
        </div>
	</div>




<div class="container">
	<div class="grid gap xs-small md-medium">
		<!-- .col-xs-6.col-md-3*4>.card>{card} -->
<!-- 		<div class="col-xs-6 col-md-3">
			<div class="card soft">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="card soft">
				<img src="https://via.placeholder.com/500" alt="" class="media-image">
			</div>
		</div>						
	</div>
</div> 
 -->
<!-- div.container>article.article#article$*4>h2{Article $}+div.article-body>p*3>lorem40 -->

<!-- <div class="container">
	<article id="article" class="article card soft">
		<div class="display-flex flex-align-center">	
			<div class="flex-stretch">
				<h2>Article 1</h2>
			</div>
			<div class="flex-none">
				<small>5:20am</small>
			</div>
		</div>	
		<div class="article-body">
			<p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Excepturi, quia itaque, libero nam tempore perspiciatis error possimus voluptas ex, vero sint atque, reiciendis delectus? Vel libero ipsum quia ullam, aperiam delectus quasi, obcaecati excepturi? Pariatur, eum eaque commodi veniam sit!</p>
			<p>Commodi obcaecati, sed reiciendis nihil dolores doloribus odit illum aperiam animi amet, nemo quidem numquam reprehenderit adipisci error, temporibus. Labore, sed voluptatem, soluta nam voluptates nesciunt explicabo reiciendis in consectetur aspernatur, praesentium dignissimos a iusto cumque sit aut quos. Minus!</p>
			<p>Dignissimos nisi accusantium harum recusandae eligendi. Debitis ipsam modi nisi excepturi enim et quam distinctio dignissimos officia necessitatibus quo quia quae, minus iste! Doloribus vero velit, soluta in delectus? Adipisci nobis obcaecati placeat assumenda ad perspiciatis voluptatem, nisi porro ducimus.</p>
		</div>
	</article>
	<article id="article2" class="article card hard">
		<h2>Article 2</h2>
		<div class="article-body">
			<p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Corporis facilis quam pariatur consequuntur ducimus saepe adipisci praesentium perspiciatis temporibus, voluptatibus eius consequatur accusamus aperiam mollitia excepturi ex eligendi eveniet facere magnam voluptates ipsum! Ut natus, voluptas obcaecati labore eaque? Adipisci.</p>
			<p>Tempora eligendi nesciunt quasi blanditiis itaque hic, ut quaerat consequatur necessitatibus, facilis voluptatem repellendus beatae quod corporis totam alias, ad velit praesentium? Adipisci recusandae quaerat possimus, illo? Quisquam odit illo ab quasi. Non consequuntur ex est iure exercitationem itaque incidunt?</p>
			<p>Necessitatibus sapiente enim facilis deserunt quibusdam dicta qui temporibus voluptates rem nostrum, animi, nemo, provident doloremque aperiam laboriosam, accusantium adipisci eaque ab. Quaerat, corporis accusantium iste consequatur suscipit, dignissimos commodi. A, repellendus dicta possimus vitae rem, veniam at. Quisquam, harum.</p>
		</div>
	</article>
</div>
<div class="view-window" style="background-image: url('img/windowback.jpeg');">
	
</div>
<div class="container">
	<article class="article" id="article3">
		<h2>Article 3</h2>
		<div class="article-body">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit soluta, incidunt iusto nihil voluptas libero possimus assumenda animi quasi ipsam. Error expedita ab in, adipisci, minus praesentium magni perferendis eligendi enim eius blanditiis nam ea, accusantium esse, sed a atque!</p>
			<p>Commodi dignissimos magnam quisquam. Facere veritatis culpa, exercitationem fugiat repudiandae veniam consectetur. Hic quas alias repudiandae tenetur nemo praesentium libero officiis vero quis soluta labore, minima non pariatur id nostrum perferendis assumenda vel optio eius! Ea iste explicabo, a voluptatem!</p>
			<p>Praesentium modi nulla perferendis commodi enim quibusdam obcaecati ratione? Distinctio veniam nostrum dignissimos blanditiis illo veritatis porro laudantium quidem numquam harum, error deleniti expedita eligendi perferendis eius sapiente possimus impedit voluptates recusandae ipsa pariatur accusamus tenetur! Commodi sit asperiores dolore.</p>
		</div>
	</article>
	<article class="article" id="article4">
		<h2>Article 4</h2>
		<div class="article-body">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam placeat architecto ut suscipit unde, optio, omnis at consectetur voluptatum molestias repellendus eaque nemo, similique quo, quam amet mollitia incidunt voluptatem voluptatibus asperiores rem iure consequatur? Asperiores minima voluptatem culpa velit.</p>
			<p>Molestias eum nulla voluptas ea fugiat iure dolores reiciendis consequatur, ducimus. Modi laborum dolore dicta veritatis, accusamus illum, atque sapiente ipsam, rem dolor quisquam dolorum labore ab nihil. Blanditiis fugit ea, quae voluptates, ducimus pariatur! Exercitationem optio porro eligendi, veritatis?</p>
			<p>Architecto facere deleniti nemo quos quisquam obcaecati temporibus quaerat! Voluptas, adipisci! Veniam, recusandae eveniet sit vero magni impedit aut placeat eius veritatis consequatur nemo, iste unde repellat dolorum, laborum animi alias odit ducimus, voluptatem atque vitae quis rem? Dolor, nostrum.</p>
		</div>
	</article>
</div> -->




</body>
</html>