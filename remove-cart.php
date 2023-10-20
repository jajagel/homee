<?php
session_start();

if(isset($_POST['id'])) {
    $productId = $_POST['id'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $productId) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['count']--;
}
foreach ($_SESSION['cart'] as $key => $item) {
   
       echo $item['id'];
    
}
echo $_SESSION['count'];
session_write_close();
header('Location: ' . $_SERVER['PHP_SELF']);
exit();
?>
