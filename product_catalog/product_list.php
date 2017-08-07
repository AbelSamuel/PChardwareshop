<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Categories</h1>
        
        <nav>
        <ul>
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
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
        <h1><?php echo $category_name; ?></h1>
        <table>
            <tr>                
                <th>Name</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><a href="?action=view_product&amp;product_id=<?php 
                          echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
            </tr>
            <?php endforeach; ?>            
        </table>
                <form action="." method="get">
                    <input type="hidden" name="action"
                           value="sort_products">
                    <input type="submit" value="Sort">
                </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>