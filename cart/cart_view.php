<?php include '../view/header.php'; ?>
<main>
    <h1>Your Cart</h1>
    <br>
    <a href="/PChardwareshop/index.php">Home</a>
    <section>
        <!-- display a table of products in cart -->
        <h2>Cart</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Code</th>                
                <th>ID</th>
                <th>Quantity</th>
                <th class="right">Total Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($cart as $product) : ?>
            <tr>
                
                <td><?php echo $product['productName']; ?></td>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productID']; ?></td>
                <td class="right"><?php echo $product['totalPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="remove_from_cart">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="submit" value="Remove">
                </form></td>
            </tr>
            <?php endforeach; ?>            
        </table>        
    </section>
</main>
<?php include '../view/footer.php'; ?>