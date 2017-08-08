<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'view_cart';
    }
}  

if ($action == 'view_cart')
    {

        $cart = get_cart();
        include('view_cart.php');
    }

 else if ($action == 'add_to_cart')
    {
        $product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
        if ($product_id == NULL || $product_id == FALSE) {
                $product_id = 1;
            }

        $quantity = filter_input(INPUT_POST, 'quantity', 
            FILTER_VALIDATE_INT);

        if ($quantity == NULL || $quantity == FALSE) {
                $quantity = 1;
            }

        $product = get_product($product_id);
        $listPrice = $product['listPrice'];

        $totalPrice = round($listPrice * $quantity, 2);
        $totalPrice_f = number_format($totalPrice, 2);

        add_product_to_cart($product_id, $quantity, $totalPrice_f);
        $cart = get_cart();
        include('view_cart.php');
    }

    else if ($action == 'remove_from_cart')
    {
        $product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
    if ($product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        remove_from_cart($product_id);
        $cart = get_cart();
        include('view_cart.php');
    }
}
?>