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
}
 else if ($action == 'add_to_cart') {
	$product_id = filter_input(INPUT_POST, 'product_id');	
    $quantity = filter_input(INPUT_POST, 'quantity'); 
    add_product_to_cart($product_id, $quantity);
    $cart = get_cart();
    include('cart_view.php');
} 
  else if ($action == 'remove_from_cart') {
	$product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
	remove_from_cart($product_id);
	$cart = get_cart();
	include('cart_view.php');
}
?>