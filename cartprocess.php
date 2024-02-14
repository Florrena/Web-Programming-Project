<?php
session_start();

if(isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = 1; // Default quantity is 1, you can change it as per your requirement

    // Check if the product already exists in the cart
    if(isset($_SESSION['cart'][$productId])) {
        // Update the quantity if the product exists
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        // Add the product to the cart
        $_SESSION['cart'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        );
    }
}

header("Location: shop.php"); // Redirect back to the main page after adding the product to the cart
?>
