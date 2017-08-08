<?php include '../view/header.php'; ?>
<main>
    <h1>Cart</h1>

    <section>
        <table>
            <tr>
                <th>ProductID</th>
                <th>Quantity</th>
                <th>TotalPrice</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($cart as $item) : ?>
            <tr>
                <td><?php echo $item['productID']; ?></td>                
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo $item['totalPrice']; ?></td>
                <td><form action="../cart/index.php" method="post">
                    <input type="hidden" name="action"
                           value="remove_from_cart">
                    <input type="hidden" name="product_id"
                           value="<?php echo $item['productID']; ?>">
                    <input type="submit" value="Remove From Cart">
                </form></td>
            </tr>
            <?php endforeach; ?>            
        </table>
        <br>
        <p><a href="/PChardwareshop/index.php">Home</a></p>
        <br>
    </section>
</main>
<?php include '../view/footer.php'; ?>