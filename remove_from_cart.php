<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product'])) {
    $productKey = $_POST['product'];

    // Check if the product exists in the cart
    if (isset($_SESSION['cart'][$productKey])) {
        // Remove the product from the cart
        unset($_SESSION['cart'][$productKey]);

        // Optionally, you can set a success message in the session
        $_SESSION['message'] = "Product removed from cart.";
    }

    // Redirect back to the cart page
    header("Location: cart.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
