<?php


function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->images">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>
HTML;
}