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

if ($action == 'view_cart') {
    $cart = get_cart();
    include('cart_view.php');
} else if ($action == 'add_to_cart') {
	$product_id = filter_input(INPUT_POST, 'product_id');
	$product = get_product($product_id);
    $code = $product['productCode'];
    $name = $product['productName'];
    $list_price = $product['listPrice'];
    $quantity = filter_input(INPUT_POST, 'quantity');
    $totalPrice = $list_price * $quantity;
    if ($product_id == NULL || $product_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_product_to_cart($product_id, $code, $name, $totalPrice);
        $cart = get_cart();
        include('cart_view.php');
} }  else if ($action == 'remove_from_cart') {
	$product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
	remove_from_cart($product_id);
	$cart = get_cart();
	include('cart_view.php');
}
?>