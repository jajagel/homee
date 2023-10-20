<?php 
    include_once('config/dbconnection.php');
?>
<div id="modal"></div>
<main>
    <section>
        <div class="hero">
            <img src="assets/images/cover.webp" alt="">
            <div class="action-card">
                <div>
                    <span>New Arrival</span>
                    <h1>Discover Our New Collection</h1>
                </div>
                <p>Introducing our latest collection of handcrafted furniture, designed to transform your space into a one-of-a-kind haven of style and comfort. </p>
                <a href="products.php">View Products</a>
            </div>
        </div>
    </section>
    <section>
        <div class="products">
            <h1>Featured Products</h1>
            <ul class="product-list">
                <?php
                    $stmt = $conn->prepare("SELECT * FROM products WHERE featured = true");
                    $stmt->execute();
                    while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) 
                    {
                ?>
                <li>
                    <div class="product-card">
                        <div class="product-img">
                            <div class="add-btn-dv"
                            data-id="<?php echo $product['id']?>" 
                            data-name="<?php echo $product['name']?>" 
                            data-image="<?php echo $product['image']?>" 
                            data-qty="1"
                            data-price="<?php echo $product['price']?>"
                            >
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                            <img src="assets/images/furnitures/<?php echo $product['image']; ?>" alt="<?php echo $product['image']; ?>">
                        </div>
                        <a href="single-product.php?id=<?php echo $product['id']; ?>" class="details">
                            <h2><?php echo $product['name']; ?></h2>
                            <span><?php echo $product['brief_desc']; ?></span>
                            <p>PHP <?php echo number_format($product['price']); ?></p>
                        </a>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </section>
    <a href="products.php" class="show-btn">Show More</a>
</main>