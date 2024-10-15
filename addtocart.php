<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the product key is set
    if (isset($_POST['product'])) {
        $productKey = $_POST['product'];

        // You might want to retrieve product details from a database or predefined array
        $products = [
            "nikon" => [
                "title" => "Nikon Camera",
                "price" => 919.99,
            ],
            "canon" => [
                "title" => "Canon EOS Camera",
                "price" => 829.99,
            ],
            "sony" => [
                "title" => "Sony Alpha Camera",
                "price" => 939.99,
            ],
        ];

        // Check if the product exists
        if (array_key_exists($productKey, $products)) {
            // Initialize the cart if it doesn't exist
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Add the product to the cart
            $_SESSION['cart'][$productKey] = $products[$productKey];

            // Redirect to a cart or confirmation page
            header("Location: cart.php"); // Change to your desired redirect
            exit();
        } else {
            echo "Product not found.";
        }
    } else {
        echo "No product selected.";
    }
} else {
    echo "Invalid request.";
}
?>
