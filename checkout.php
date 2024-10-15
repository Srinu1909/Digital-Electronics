<?php
session_start(); // Start the session

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty. You cannot proceed to checkout.</h2>";
    echo '<a href="index.php" class="btn btn-primary">Continue Shopping</a>';
    exit();
}

// Sample products array (same as in previous scripts)
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

// Calculate the total price
$totalPrice = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Checkout</h1>
    <div class="table-responsive mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $key => $item): ?>
                    <tr>
                        <td><?php echo $item['title']; ?></td>
                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                    </tr>
                    <?php $totalPrice += $item['price']; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <h4 class="text-right">Total: $<?php echo number_format($totalPrice, 2); ?></h4>

    <form method="POST" action="process_checkout.php">
        <h3>Shipping Information</h3>
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
