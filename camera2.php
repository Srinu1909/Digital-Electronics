<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Products</title>
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
include "navbar2.php";	
?>

<?php
$products = [
    [
        "key" => "nikon", // Added a unique key for each product
        "title" => "Nikon Camera",
        "description" => "A high-quality camera for photography with latest Nikon technology.",
        "price" => 919.99,
        "image" => "img/nikon.png" // Replace with actual image URL
    ],
    [
        "key" => "canon",
        "title" => "Canon EOS Camera",
        "description" => "Capture stunning images with the latest Canon technology.",
        "price" => 829.99,
        "image" => "img/canon.png" // Replace with actual image URL
    ],
    [
        "key" => "sony",
        "title" => "Sony Alpha Camera",
        "description" => "A mirrorless camera with excellent low-light performance.",
        "price" => 939.99,
        "image" => "img/sony.png" // Replace with actual image URL
    ],
];
?>

<div class="container mt-5">
    <h1 class="text-center text-primary mb-4"><i>CAMERA PRODUCTS</i></h1>
    <div class="row mt-5">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['title']; ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title text-center"><?php echo $product['title']; ?></h5>
                        <p class="card-text text-center"><?php echo $product['description']; ?></p>
                        <p class="text-success text-center"><strong>$<?php echo number_format($product['price'], 2); ?></strong></p>
                        <div class="text-center">
                            <a href="index.php">
                                <button type="submit" class="btn btn-dark">Add to Cart</button>
        </a>
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
