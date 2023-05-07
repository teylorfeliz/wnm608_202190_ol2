var category = []
const listItemTemplate = templater(o=>{
    if(!category.includes(o.category)){
        category.push(o.category)
    }
    
    return `
        <a class="col-xs-12 col-md-4 product_item" href="product_item.php?id=${o.id}">
        <figure class="figure product display-flex flex-column">
            
                <div class="flex-stretch">    
                    <img src="img/store/${o.thumbnail}" alt="">
                </div>

                <figcaption class="flex-none flex-column">
                    <div><b>${o.brand}</b></div>
                    <div>${o.name}</div>
                    <div><p style="margin: 10px">&dollar;${o.price.toFixed(2)}</p></div>
                </figcaption>

        </figure>
        </a>
        `
});