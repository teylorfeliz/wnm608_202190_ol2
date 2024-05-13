<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
		<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div>&dollar;$o->price</div>
			<div>$o->name</div>
		</figcaption>
	</figure>	
</a>
HTML;
}

function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="/images/store/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->title</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>
HTML;
}




function recommendedProducts($a) {
	$products = array_reduce($a,'productListTemplate');
	echo <<<HTML
	<div class="grid gap productlist">$products</div>
	HTML;
}

function recommendedCategory($cat,$limit=3) {
		$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = '$cat' ORDER BY `date_create` DESC LIMIT $limit");

		recommendedProducts($result);
}
function recommendedSimilar($cat,$id=0,$limit=3) {
		$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = '$cat' AND `id` ORDER BY rand() LIMIT ;$LIMIT");

		recommendedProducts($result);
}