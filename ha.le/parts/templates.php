<?php


// $r - currently reducing value as we looping thru the array
// $o - current object in the current loop 

function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-6 col-lg-3" href="product_item.php?id=$o->id">
	<figure class="figure product-overlay display-flex flex-column">
		<div class="flex-strech">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div class="caption-body">
				<h5>$o->name</h5>
				<h5>&dollar;$o->price</h5>
			</div>

		</figcaption>
	</figure>
</a>
HTML;
}



function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex cart-list">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<h5>$o->name</h5>
	</div>
	<div class="display-inline-flex">
		<h5>&dollar;$o->price</h5>
		<div class="display-flex" style="align-items: flex-start; padding-left: 1em;"><button class="form-button small-button transparent">Remove</button></div>
	</div>
</div>		
HTML;
}



function checkoutSummaryTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex checkout-list">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<h6>$o->name</h6>
	</div>
	<div>
		<h6>&dollar;$o->price</h6>
	</div>
</div>		
HTML;
}







?>