<?php
    include_once "lib/php/functions.php";

    switch($_GET['action']) {
        case "add-to-bag":
            addToBag($_POST['product-id'], $_POST['product-amount'], $_POST['product-color']);
            header("location:product_added_to_bag.php?id={$_POST['product-id']}&color={$_POST['product-color']}");
            break;
        case "update-bag-item":
            // $p = bagItemById($_POST['id']);
            $p = bagItemByIdAndColor($_POST['id'], $_POST['color']);
            $p->amount = $_POST['amount'];
            header("location:product_bag.php");
            break;
        case "delete-bag-item":
            $_SESSION['bag'] = array_filter($_SESSION['bag'], function($o) {
                return $o->id != $_POST['id'];
            });
            header("location:product_bag.php");
            break;
        case "reset-bag":
            resetBag();
            break;
        default:
            die("Incorrect Action");
            break;
    }
?>