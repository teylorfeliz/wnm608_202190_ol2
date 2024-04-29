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
		<figcaption class="flex-none flex-column" >
			<div class="caption-body flex-stretch">
				<h5>$o->name</h5>
				<h5>&dollar;$o->price</h5>
			</div>
		</figcaption>
	</figure>
</a>
HTML;
}


function selectAmount($amount=1,$total=5) {
	$ouput = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$ouput .= "<option ".($i==$amount?"selected":"")."> $i </option>";
	}
	$ouput .= "</select>";
	return $ouput;
}



/* Cart Page*/

function cartListTemplate($r,$o) {
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,5);
return $r.<<<HTML
<div class="display-flex cart-list">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<h5>$o->name ($o->amount)</h5>
	</div>
	<div class="display-inline-flex">
		<h5>&dollar;$totalfixed</h5>
		<form method="post" action="cart_actions.php?action=update-cart-item" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<div class="form-select flex-none" style="margin-left: 1em; font-size: 0.8em; height: fit-content">
				$selectamount
			</div>
		</form>

		<form method="post" action="cart_actions.php?action=delete-cart-item">
			<input type="hidden" name="id" value="$o->id">
			<div class="display-flex" style="align-items: flex-start; padding-left: 1em;">
				<input type="submit" class="form-button small-button transparent" value="Remove" >
			</div>
		</form>
	</div>
</div>		
HTML;
} 


/*

function cartDisplay($r,$o) {
	$cart = getCartItems();

	if(count($cart)<1) {
		return "<div> Your cart is empty </div>";
	}else {
		return cartListTemplate($r,$o);
	}
} 

*/


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart, function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="cart-totals">
	<div class="display-flex">
		<h5 class="flex-stretch">Total</h5>
		<h3 class="flex-none">&dollar;$taxedfixed</h3>
	</div>
	<div class="space"></div>
	<div class="display-flex">
		<h5 class="flex-stretch">Subtotal</h5>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="display-flex">
		<h5 class="flex-stretch">Taxes</h5>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<div class="space"></div>
	<form>
		<div class="form-control display-flex" style="justify-content: flex-end;">
			<a href="product_checkout.php" class="form-button">CHECK OUT</a>
		</div>
	</form>
</div>
HTML;
}






/* Checkout Page*/
function checkoutSummaryTemplate($r,$o) {
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,5);
return $r.<<<HTML
<div class="display-flex cart-list">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<h6>$o->name ($o->amount)</h6>
	</div>
	<div class="display-inline-flex">
		<h6>&dollar;$totalfixed</h6>
	</div>
</div>	
HTML;
}













?>

























