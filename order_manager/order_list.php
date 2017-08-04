<?php include '../view/header.php'; ?>
<main>
    <h1>Order List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        <a href="/PChardwareshop/index.php">Home</a>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Amount</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?php echo $order['productID']; ?></td>
                <td><?php echo $order['amount']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="order_processed">
                    <input type="hidden" name="product_id"
                           value="<?php echo $order['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $order['categoryID']; ?>">
                    <input type="submit" value="Process">
                </form></td>
            </tr>
            <?php endforeach; ?>            
        </table>
        <p></p>
    </section>
</main>
<?php include '../view/footer.php'; ?>