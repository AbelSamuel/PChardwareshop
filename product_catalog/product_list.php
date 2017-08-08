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
                <th>CategoryID</th>                
                <th>Name</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['categoryID']; ?></td>  
                <td><a href="?action=view_product&amp;product_id=<?php 
                          echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="sort_products">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Sort">
                </form>
                </td>
            </tr>
            <?php endforeach; ?>            
        </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>