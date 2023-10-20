<?php 
    include_once('config/dbconnection.php');
?>
<div id="modal"></div>
<main>
    <?php
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = $id");
        $stmt->execute();
        while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) 
        {
    ?>
    <div class="breadcrumbs top-margin">
        <a href="index.php">Home</a> &gt; <a href="products.php">Furniture</a> &gt; <span><?php echo $product['name']?></span>
    </div>
    <section>
        <div class="product-detailed">
            <div class="gallery">
                <img src="assets/images/furnitures/<?php echo $product['image']?>" alt="">
            </div>
            <div class="full-details" 
            data-id="<?php echo $product['id']?>" 
            data-name="<?php echo $product['name']?>" 
            data-image="<?php echo $product['image']?>" 
            data-qty="1"
            data-price="<?php echo $product['price']?>">
                <div class="title" >
                    <h1><?php echo $product['name'];?></h1>
                    <p><?php echo $product['brief_desc'];?></p>
                    <h2>PHP <?php echo number_format($product['price']);?></h2> 
                </div>
                <p><?php echo $product['long_desc'];?></p>
                <button class="btn add-to-cart-full" href="">Add to cart</button>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
    <section>

        <div class="other-products">
            <div id="cart"></div>
            <h1>Other Products</h1>
            <ul class="product-list">
                <?php
                    $stmt = $conn->prepare("SELECT * FROM products WHERE id != $id ORDER BY RAND() LIMIT 4");
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
                            <img src="assets/images/furnitures/<?php echo $product['image'];?>" alt="">
                            
                        </div>
                        <a href="single-product.php?id=<?php echo $product['id']; ?>" class="details">
                            <h2><?php echo $product['name'];?></h2>
                            <span><?php echo $product['brief_desc'];?></span>
                            <p>PHP <?php echo number_format($product['price']);?></p>
                        </a>
                    </div>
                </li>
               <?php
                    }
               ?>
            </ul>
        </div>

    </section>
</main>
