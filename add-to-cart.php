<?php
session_start();

if(isset($_POST['id']) && isset($_POST['price']) && isset($_POST['name']) && isset($_POST['image'])) {
    $productId = $_POST['id'];
    $productPrice = $_POST['price'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $cartItem = array_filter($_SESSION['cart'], function ($item) use ($productId) {
        return $item['id'] == $productId;
    });

    if (empty($cartItem)) {
        $_SESSION['cart'][] = [
            'id' => $productId,
            'name' => $productName,
            'image' => $productImage,
            'price' => $productPrice,
        ];
       $data[] = [
            'name' => $productName,
            'image' => $productImage,
            'price' => $productPrice,
            'message' =>"Product has been added to your cart.",
        ];
    }else{
        $data[] = [
            'message' =>"Product has already been added to your cart.",
        ];
    }
    
    $itemCount = 0;
    
    foreach ($_SESSION['cart'] as $item) {
        $itemCount++;
    }
    $_SESSION['count']=$itemCount;
    $data[] = [
        'count' =>$_SESSION['count'],
    ];
}

if(isset($data)) {
    if(isset($data)){
        echo json_encode($data);
    }
} else {
    echo '0';
}
?>
