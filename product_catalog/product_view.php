<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Categories</h1>

        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php 
                              echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <a href="/PChardwareshop/index.php">Home</a>
            </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $name; ?></h1>
        <div id="left_column">             
            <p>
                <img src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
                    </p>
            
        </div>

        <div id="right_column">
            <p><b>List Price:</b> $<?php echo $list_price; ?></p>                
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="request_item">
                <input type="hidden" name="product_id"
                       value="<?php echo $product_id; ?>">
                <b>Quantity:</b>
                <input id="quantity" type="text" name="quantity" 
                       value="1" size="2">
                <br><br>
                <input type="submit" value="Request Item">
            </form>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>