<?php
    
function productlistTemplate($r,$o) {
    return $r.<<<HTML
    <a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
        <figure class="figure product display-flex flex-column">
            
                <div class="flex-stretch">    
                    <img src="img/store/$o->thumbnail" alt="">
                </div>

                <figcaption class="flex-none flex-column">
                    <div><b>$o->brand</b></div>
                    <div>$o->name</div>
                    <div><p style="margin: 10px">&dollar;$o->price</p></div>
                </figcaption>

        </figure>
    </a>
                
HTML;
}

function cartlistTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
    <div class="flex-none images-thumbs">
        <img src="../Shih.Yuhuan/img/store/$o->thumbnail">
    </div>

    <div class="flex-stretch">
        <strong>$o->name</strong>
        <div>Delete</div>

        <div class="flex-none">
            &dollar;$o->price
        </div>

    </div>
</div>
HTML;
}