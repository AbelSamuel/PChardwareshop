<?php
function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.categoryID = :category_id
              ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;    
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price, $stock) {
    global $db;
    $query = 'INSERT INTO products
                 (categoryID, productCode, productName, listPrice, stock)
              VALUES
                 (:category_id, :code, :name, :price, :stock)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':stock', $stock);
    $statement->execute();
    $statement->closeCursor();
}

function order_product($order_id, $code, $stock, $date) {
    global $db;
    $query = 'INSERT INTO orders
                 (orderID, productCode, stock, date)
              VALUES
                 (:order_id, :code, :stock, :date)';
    $statement = $db->prepare($query);
    $statement->bindValue(':order_id', $order_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':stock', $stock);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $statement->closeCursor();
}
?>