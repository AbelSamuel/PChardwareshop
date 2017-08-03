<?php include '../view/header.php'; ?>
<main>
    <h1>Order Product</h1>
    <form action="index.php" method="post" id="order_product_form">
        <input type="hidden" name="action" value="order_product">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Code:</label>
        <input type="text" name="code" />
        <br>

        <label>Amount:</label>
        <input type="text" name="amount" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Order Product"/>
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>