<?php
session_start();

// Product array
$products = [
    [
        "id" => 1,
        "title" => "Samsung Galaxy S21",
        "description" => "Latest smartphone with advanced features and latest technology.",
        "price" => "$799.99",
        "image" => "img/samsung-galaxy-s21.png" // Replace with actual image URL
    ],
    [
        "id" => 2,
        "title" => "iPhone 13",
        "description" => "Experience the latest technology from Apple.",
        "price" => "$999.99",
        "image" => "img/iphone-13.png" // Replace with actual image URL
    ],
    [
        "id" => 3,
        "title" => "Google Pixel 6",
        "description" => "Capture stunning photos with Google's best camera.",
        "price" => "$599.99",
        "image" => "img/google-pixel-6.png" // Replace with actual image URL
    ],
];

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $foundProduct = null;

    // Find the product by ID
    foreach ($products as $product) {
        if ($product['id'] == $productId) {
            $foundProduct = $product;
            break;
        }
    }

    if ($foundProduct) {
        // Initialize cart if it doesn't exist
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        
        // Add product to cart
        $_SESSION['cart'][] = $foundProduct;

        // Redirect to the same page to avoid form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

// Handle Remove from Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_id'])) {
    $removeId = $_POST['remove_id'];

    // Remove the product from the cart
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $removeId) {
            unset($_SESSION['cart'][$key]);
            // Re-index the array
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            break;
        }
    }

    // Redirect to the same page after removing the item
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px; /* Fixed height */
            object-fit: cover; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>

<?php include "navbar.php"; // Include your navbar here ?>

<div class="container mt-4">
    <h1 class="text-center text-primary mb-4">Mobile Products</h1>
    <div class="row mt-4">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="text-success"><strong><?php echo htmlspecialchars($product['price']); ?></strong></p>
                        <form method="POST" action="">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <button type="submit" class="btn btn-dark">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Show Cart Items -->
<div class="container mt-4">
    <h2 class="text-primary">Your Cart</h2>
    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
        <ul class="list-group">
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo htmlspecialchars($item['title']); ?> - <?php echo htmlspecialchars($item['price']); ?>
                    <form method="POST" action="" class="mb-0">
                        <input type="hidden" name="remove_id" value="<?php echo $item['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="checkout.php" class="btn btn-success mt-3 mb-1">Proceed to Checkout</a>
       <p class="text-white">dddddddddddddddddddddddddddddddddddddddddddddddd</p>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
