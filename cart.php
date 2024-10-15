<?php
session_start(); // Start the session

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty.</h2>";
    echo '<a href="index.php" class="btn btn-primary">Continue Shopping</a>';
    exit();
}

// Sample products array (same as in addtocart.php)
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
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Your Shopping Cart</h1>
    <div class="table-responsive mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $key => $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['title']); ?></td>
                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                        <td>
                            <form method="POST" action="remove_from_cart.php" style="display:inline;">
                                <input type="hidden" name="product" value="<?php echo $key; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                    <?php $totalPrice += $item['price']; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <h4 class="text-right">Total: $<?php echo number_format($totalPrice, 2); ?></h4>
    <div class="text-center mt-4">
        <a href="camera.php" class="btn btn-primary">Continue Shopping</a>
        <a href="checkout.php" class="btn btn-success">Checkout</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
