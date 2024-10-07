<?php 
session_start(); // Start session management

// Define the discount amount
$discountAmount = 200; // Example: $200 off

// Camera products
$cameras = [
    [
        "title" => "Nikon Camera",
        "description" => "A high-quality camera for photography with latest Nikon technology.",
        "price" => 919.99,
        "image" => "img/nikon.png"
    ],
    [
        "title" => "Canon EOS Camera",
        "description" => "Capture stunning images with the latest Canon technology.",
        "price" => 829.99,
        "image" => "img/canon.png"
    ],
    [
        "title" => "Sony Alpha Camera",
        "description" => "A mirrorless camera with excellent low-light performance.",
        "price" => 939.99,
        "image" => "img/sony.png"
    ],
];

// Mobile products
$mobiles = [
    [
        "id" => 1,
        "title" => "Samsung Galaxy S21",
        "description" => "Latest smartphone with advanced features and latest technology.",
        "price" => 799.99,
        "image" => "img/samsung-galaxy-s21.png"
    ],
    [
        "id" => 2,
        "title" => "iPhone 13",
        "description" => "Experience the latest technology from Apple.",
        "price" => 999.99,
        "image" => "img/iphone-13.png"
    ],
    [
        "id" => 3,
        "title" => "Google Pixel 6",
        "description" => "Capture stunning photos with Google's best camera.",
        "price" => 599.99,
        "image" => "img/google-pixel-6.png"
    ],
];

// Television products
$televisions = [
    [
        "title" => "Sony Bravia 55\" 4K TV",
        "description" => "A stunning 4K HDR television with vibrant colors.",
        "price" => 899.99,
        "image" => "img/sony-bravia-55.png"
    ],
    [
        "title" => "Samsung QLED 65\" TV",
        "description" => "Experience cinematic quality with quantum dots.",
        "price" => 1299.99,
        "image" => "img/samsung-qled-65.png"
    ],
    [
        "title" => "LG OLED 65\" TV",
        "description" => "Perfect black and stunning colors with OLED technology.",
        "price" => 1499.99,
        "image" => "img/lg-oled-65.png"
    ],
];

include "navbar.php"; // Include your navbar here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px; /* Fixed height */
            object-fit: cover; /* Maintain aspect ratio */
        }
        .card {
            transition: transform 0.2s; /* Animation for card hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }
        .card:hover {
            transform: scale(1.05); /* Slightly enlarge card on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
        }
        .text-danger {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center text-primary mb-4"><i>CAMERA PRODUCTS</i></h1>
    <div class="row mt-5">
        <?php foreach ($cameras as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="text-success"><strong><?php echo htmlspecialchars('$' . number_format($product['price'], 2)); ?></strong></p>
                        <p class="text-danger"><strong>Discounted Price: <?php echo htmlspecialchars('$' . number_format($product['price'] - $discountAmount, 2)); ?></strong></p>
                        <a href="#" class="btn btn-dark">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h1 class="text-center text-primary mb-4"><i>MOBILE PRODUCTS</i></h1>
    <div class="row mt-5">
        <?php foreach ($mobiles as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="text-success"><strong><?php echo htmlspecialchars('$' . number_format($product['price'], 2)); ?></strong></p>
                        <p class="text-danger"><strong>Discounted Price: <?php echo htmlspecialchars('$' . number_format($product['price'] - $discountAmount, 2)); ?></strong></p>
                        <form method="POST" action="">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <button type="submit" class="btn btn-dark">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h1 class="text-center text-primary mb-4"><i>TELEVISION PRODUCTS</i></h1>
    <div class="row mt-5">
        <?php foreach ($televisions as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="text-success"><strong><?php echo htmlspecialchars('$' . number_format($product['price'], 2)); ?></strong></p>
                        <p class="text-danger"><strong>Discounted Price: <?php echo htmlspecialchars('$' . number_format($product['price'] - $discountAmount, 2)); ?></strong></p>
                        <a href="#" class="btn btn-dark">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
