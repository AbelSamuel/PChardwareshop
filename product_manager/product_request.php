<?php include '../view/header.php'; ?>
<main>
    <h1>Order Product</h1>
    <form action="index.php" method="get" id="order_product_form">
        <input type="hidden" name="action" value="order_product">

        <label>Category ID:</label>
        <input type="text" name="category_id"/>
        <br>

        <label>Product ID:</label>
        <input type="text" name="product_id" />
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