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
        <h1>Thank you for requesting more stock, we are sorry for the inconvenience!</h1>
        <p>We look forward to adding "Add to Cart" functionality in the near future!</p>       
    </section>
</main>
<?php include '../view/footer.php'; ?>