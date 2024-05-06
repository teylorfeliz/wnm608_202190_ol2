


const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-6 col-lg-3" href="product_item.php?id=${o.id}">
	<figure class="figure product-overlay display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/${o.thumbnail}" alt="">
		</div>
		<figcaption class="flex-none flex-column" >
			<div class="caption-body flex-stretch">
				<h5>${o.name}</h5>
				<h5>&dollar;${o.price}</h5>
			</div>
		</figcaption>
	</figure>
</a>
`);