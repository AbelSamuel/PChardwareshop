<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_orders';
    }
}

if ($action == 'list_orders') {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 17;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $orders = get_orders_by_category($category_id);
    include('order_list.php');
} else if ($action == 'order_processed') {
    $product_id = filter_input(INPUT_POST, 'productID');
    $category_id = filter_input(INPUT_POST, 'categoryID', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
            $product_id == NULL) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        delete_order($product_id);
        header("Location: .?category_id=$category_id");
    }
}
?>