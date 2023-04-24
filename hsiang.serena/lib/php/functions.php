<?php 
    // Function
    function print_p($value) {
        echo "<pre>",print_r($value),"</pre>";
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

    function makeQuery($conn, $qry) {
        $result = $conn -> query($qry);
        if ($conn -> errno) die($conn -> error);
        $a = [];
        while($row = $result->fetch_object()) {
            $a[] = $row;
        }
        return $a;

    }
    
    function sum($a) {
        $total = 0;
        for ($i = 0; $i < count($a); $i++) {
            $total += $a[$i]->price;
        }
        return $total;
    }

    function countTax($amount, $taxRate = 0.0975) {
        return number_format($amount * $taxRate, 2, '.', '');
    }

    function grandTotal($a) {
        return number_format(sum($a) + countTax(sum($a)), 2, '.', '');
    }
    
?>