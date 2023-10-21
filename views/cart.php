<?php 
    require_once('config/dbconnection.php');
?>
<main>
    <section>
        <div class="top-margin">
            <h1 class="cart-title">My Cart</h1>
            <div class="cart">
                <ul>
                    <?php 
                        if(isset($_SESSION['cart']) && $_SESSION && $_SESSION['cart'] !== []){
                            foreach($_SESSION['cart'] as $item) 
                            {    
                    ?>
                    <li class="cart-itm">
                        <img src="assets/images/furnitures/<?php echo $item['image']; ?>" alt="">
                        <div class="cart-itm-details" data-id="<?php echo $item['id']; ?>">
                            <div class="">
                                <h1><?php echo $item['name']; ?></h1>
                                <p class="item-total" id="item-total-<?php echo $item['id']; ?>">PHP <?php echo number_format($item['price']); ?></>
                            </div>
                            <div class="qty-btns">
                                <button onclick="increment(<?php echo $item['id']; ?>)"  class="increment">+</button>
                                <input data-price="<?php echo $item['price']; ?>" id="<?php echo $item['id']; ?>" class="qty" type="number" value="1" readonly>
                                <button onclick="decrement(<?php echo $item['id']; ?>)" class="decrement">-</button>
                            </div>
                            <button class="btn-remove remove">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>.btn-remove svg{fill:#757575}</style><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                <p>Remove</p>
                            </button>
                        </div>
                    </li>
                    <?php
                            }
                        }else{   
                    ?>
                    <h1>Your cart is empty</h1>
                    <?php
                        }  
                    ?>
                </ul>
                <div class="total">
                    <h1>Order Summary</h1>
                    <div class="summary">
                        <div class="total-row">
                            <h2 >Subtotal</h2>
                            <p >PHP <span id="sub-total">-</span></p>
                        </div>
                        <div class="total-row">
                            <h2>Shipping</h2>
                            <p>-</p>
                        </div>
                    </div>
                    <div class="total-row total-amt">
                        <h1>Total</h1>
                        <p>PHP <span id="final-total">-</span></p>
                    </div>
                    <button class="btn-checkout">Checkout</button>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="assets/js/quantity.js"></script>
<script src="assets/js/remove-cart.js"></script>
