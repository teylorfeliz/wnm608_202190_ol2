
const showResults = d => {
    $(".productlist").html(
        d.error?d.error:
        d.result.length?listItemTemplate(d.result):'No Results'
    );
    if(d.result.length){
        $(".categories").html(
            `
                <div class="form-control">
                    <button onclick="query({type:'products',product:'${product}'}).then(showResults)" type="button"  class="form-button">All</button>
                </div>
            `
        )
        category.forEach(i=>{
            $(".categories").append(`
                <div class="form-control">
                    <button onclick="query({type:'product_filter',column:'category',value:'${i}'}).then(showResults)" type="button"  class="form-button">${i}</button>
                </div>
            `)
        })
    }
}

// query({type:'products_all'}).then(showResults);


query({type:'products',product:product}).then(showResults)



$(()=>{
    
    $("#product-search").on("submit",function(e){
        e.preventDefault();
        let search = $(this).find("input").val();
        query({type:'product_search',search}).then(showResults);

    })

    $("[data-filter]").on("click", ()=>{
        let column = $(e).data("filter");
        let value = $(e).data("value");
        query(
            value==""? {type:'products_all'}:
            {type:'product_filter',column,value, product}
        ).then(showResults);
        
    })

    $(".js-sort").on("change",function(e){
        (
            this.value==1 ? query({type:'product_sort',column:'date_create',dir:'DESC'}) :
            this.value==2 ? query({type:'product_sort',column:'date_create',dir:'ASC'}) :
            this.value==3 ? query({type:'product_sort',column:'price',dir:'DESC'}) :
            this.value==4 ? query({type:'product_sort',column:'price',dir:'ASE'}) :
            query({type:'products_all'})
        ).then(showResults);
    })

})


