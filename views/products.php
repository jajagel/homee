<?php 
    include_once('config/dbconnection.php');
?>
<div id="modal"></div>
<main>
    <section>
        <div class="banner">
            <img src="assets/images/cover.webp" alt="">
            <h1>Furniture</h1>
            <div class="filter"></div>
        </div>
    </section>
    <div class="breadcrumbs">
        <a href="index.php">Home</a> &gt; <span>Furniture</span>
    </div>
    <section>
        <ul class="product-list">
        <?php
            $stmt = $conn->prepare("SELECT * FROM products");
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
                        <img src="assets/images/furnitures/<?php echo $product['image']?>" alt="<?php echo $product['image']?>">
                    </div>
                    <a href="single-product.php?id=<?php echo $product['id']?>" class="details">
                        <h2><?php echo $product['name']?></h2>
                        <span><?php echo $product['brief_desc']?></span>
                        <p>PHP <?php echo number_format($product['price'])?></p>
                    </a>
                </div>
            </li>
        <?php
            }
        ?>
        </ul>
    </section>
</main>
