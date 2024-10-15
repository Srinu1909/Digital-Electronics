<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Products</title>
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

<?php 
include "navbar2.php"; // Include your navbar here
?>

<?php
$products = [
    [
        "title" => "Dell XPS 13",
        "description" => "A premium ultrabook with stunning design and performance.",
        "price" => "$999.99",
        "image" => "img/dell-xps-13.png" // Replace with actual image URL
    ],
    [
        "title" => "HP Spectre x360",
        "description" => "Versatile 2-in-1 laptop with a sleek design and stunning",
        "price" => "$1199.99",
        "image" => "img/hp-spectre-x360.png" // Replace with actual image URL
    ],
    [
        "title" => "Lenovo ThinkPad X1 Carbon",
        "description" => "Business-class performance and durability with stunning design",
        "price" => "$1399.99",
        "image" => "img/lenovo-thinkpad-x1.png" // Replace with actual image URL
    ],
];
?>

<div class="container mt-5">
    <h1 class="text-center text-primary mb-4"><i>LAPTOP PRODUCTS</i></h1>
    <div class="row mt-5">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['title']); ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title text-center"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text text-center"><?php echo htmlspecialchars($product['description']); ?></p>
                        <p class="text-success text-center"><strong><?php echo htmlspecialchars($product['price']); ?></strong></p>
                        <div class="text-center">
        <a href="#" class="btn btn-dark">Add to Cart</a>
    </div>
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
