<?php 

    session_start();

    // Function
    function print_p($value, $key = '') {
        echo "<pre style='margin-top: 100px;'>",$key,"<br>",print_r($value),"</pre>";
    }

    function file_get_json($filename) {
        $file = file_get_contents($filename);
        return json_decode($file); 
    }

    include_once "auth.php";

    function makeConn() {
        $conn = new mysqli(...MYSQLIAuth());
        if ($conn -> connect_errno) {
            die($conn -> connect_error);
        }
        $conn->set_charset('utf8');
        return $conn;
    }

    function makePDOConn() {
        try {
            $conn = new PDO(...PDOAuth());
        } catch(PDOException $e) {
            die($e->getMessage());
        }
        return $conn;
    }

    function makeQuery($conn, $qry) {
        $result = $conn -> query($qry);
        if ($conn -> errno) die($conn -> error);
        $a = [];
        while($row = $result->fetch_object()) {
            $a[] = $row;
        }
        return $a;
    }

    function countTax($amount, $taxRate = 0.0975) {
        return number_format($amount * $taxRate, 2, '.', '');
    }

    function grandTotal($a) {
        return number_format(sum($a) + countTax(sum($a)), 2, '.', '');
    }

    /* BAG FUNCTIONS */

    function array_find($array, $fn) {
        foreach ($array as $o) {
            if ($fn($o)) {
                return $o;
            }
        }
        return false;
    }

    function getBag() {
        return isset($_SESSION['bag']) ? $_SESSION['bag'] : [];
    }

    function addToBag($id, $amount, $color) {
        $bag = getBag();

        $p = array_find($bag, function($o) use($id, $color) {
            return $o->id == $id && $o->color == $color;
        });

        if ($p) {
            $p->amount += $amount;
        } else {
            $_SESSION['bag'][] = (object)[
                "id" => $id,
                "amount" => $amount,
                "color" => $color,
            ];
        }

    }

    function resetBag() {
        $_SESSION['bag'] = [];
    }

    function bagItemByIdAndColor($id, $color) {
        return array_find(getBag(),function($o) use($id, $color) {
            return $o->id==$id && $o->color==$color;
        });
    }

    function bagItemById($id) {
        return array_find(getBag(),function($o) use($id) {return $o->id==$id;});
    }

    function countBagItemById($id) {
        $items = array_filter(getBag(),function($o) use($id) {return $o->id==$id;});
        return array_reduce($items, function($r, $o) {
            return $r + $o->amount;
        }, 0);
    }

    function makeBagBadge() {
        $bag = getBag();
        if(count($bag)==0) {
            return "";
        } else {
            return array_reduce($bag,function($r,$o){return $r+$o->amount;},0);
        }
    }

    function getBagItems() {
        $bag = getBag();

        if (empty($bag)) {
            return [];
        }

        $ids = implode(
            ",", 
            array_map(function($o) {
                return $o->id;
            }, $bag)
        );

        $data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN ($ids)");

        return array_map(function($o) use($data) {
            $itemById = array_find($data, function($p) use($o) { return $o->id == $p->id; });
            $o->name = $itemById->name." (".$o->color.")";
            $o->description = $itemById->description;
            $o->total = $o->amount * $itemById->price;
            $o->category = $itemById->category;
            $o->thumbnail = $itemById->thumbnail;
            return $o;
        }, $bag);
    }
?>
