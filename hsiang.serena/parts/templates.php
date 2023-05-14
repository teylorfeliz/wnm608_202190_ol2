<?php
    function productListTemplate($r, $o) {
        return $r.<<<HTML
        <a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
            <figure class="figure product display-flex flex-column">
                <div class="flex-stretch">
                    <img src="img/$o->thumbnail" alt="">
                </div>
                <figcaption class="flex-none">
                    <div class="caption-body">
                        <div>$o->name</div>
                        <div>&dollar;$o->price</div>
                    </div>
                </figcaption>
            </figure>
        </a>
        HTML;
    }

    function selectAmount($amount=1, $total=10) {
        $output = "<select name='amount'>";
        for ($i = 1; $i <= $total; $i++) {
            $output .= "<option ".($i == $amount ? "selected" : "").">$i</option>";
        }
        $output .= "</select>";
        return $output;
    }

    function bagListTemplate($r, $o) {
        $totalfixed = number_format($o->total, 2, '.', '');
        $selectamount = selectAmount($o->amount, 10);

        return $r.<<<HTML
            <div class="display-flex card-section">
                <div class="flex-none images-thumbs">
                    <img src="img/$o->thumbnail" alt="">
                </div>
                <div class="flex-stretch" style="margin-top: 10px;">
                    <strong>$o->name</strong>
                    <form action="bag_actions.php?action=delete-bag-item" method="post" style="margin-top: 1em;">
                        <input type="hidden" name="id" value="$o->id">
                        <input type="submit" class="form-button inline" value="Delete" style="font-size: 0.8em;">
                    </form>
                </div>
                <div class="flex-none" style="margin-top: 10px;">
                    <div>&dollar;$totalfixed</div>
                    <form action="bag_actions.php?action=update-bag-item" method="post" onchange="this.submit()">
                        <input type="hidden" name="id" value="$o->id">
                        <input type="hidden" name="color" value="$o->color">
                        <div class="form-select short" style="font-size: 0.8em; margin-top: 1em;">
                            $selectamount
                        </div>   
                    </form>
                </div>
            </div>
        HTML;
    }

    function bagTotal() {
        $bag = getBagItems();

        $bagprice = array_reduce($bag, function($r, $o) {
            return $r+$o->total;
        }, 0);

        $pricefixed = number_format($bagprice, 2, '.', '');
        $taxfixed = number_format($pricefixed * 0.0725, 2, '.', '');
        $taxedfixed = number_format($bagprice * 1.0725, 2, '.', '');

        return <<<HTML
            <div class="card-section display-flex">
                <div class="flex-stretch"><strong>Sub Total</strong></div>
                <div class="flex-none">&dollar; $pricefixed</div>
            </div>
            <div class="card-section display-flex">
                <div class="flex-stretch"><strong>Taxes</strong></div>
                <div class="flex-none">&dollar; $taxfixed</div>
            </div>
            <div class="card-section display-flex">
                <div class="flex-stretch"><strong>Total</strong></div>
                <div class="flex-none">&dollar; $taxedfixed</div>
            </div>
            <div class="card-section">
                <a href="product_checkout.php" class="form-button">Checkout</a>
            </div>
        HTML;
    }
    
    function recommendedProducts($a) {
        $products = array_reduce($a, 'productListTemplate');
        echo <<<HTML
            <div class="grid gap productlist">$products</div>
        HTML;
    }

    function recommendedCategory($cat, $limit=3) {
        $result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`= '$cat' ORDER BY `date_create` DESC LIMIT $limit");
        recommendedProducts($result);
    }
    
    function recommendedSimilar($cat, $id=0, $limit=3) {
        $result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`= '$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT $limit");
        recommendedProducts($result);
    }
?>