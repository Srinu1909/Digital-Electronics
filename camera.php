<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<?php 
include "navbar.php";	
?>

<?php
$products = [
    [
        "title" => "Nikon Camera",
        "description" => "A high-quality camera for photography with latest Nikon technology.",
        "price" => "$19.99",
        "image" => "img/nikon.png" // Replace with actual image URL
    ],
    [
        "title" => "Canon EOS Camera",
        "description" => "Capture stunning images with the latest Canon technology.",
        "price" => "$29.99",
        "image" => "img/canon.png" // Replace with actual image URL
    ],
    [
        "title" => "Sony Alpha Camera",
        "description" => "A mirrorless camera with excellent low-light performance.",
        "price" => "$39.99",
        "image" => "img/sony.png" // Replace with actual image URL
    ],
];
?>

<div class="container mt-4">
    <h1 class="text-center text-primary mb-4">Camera Products</h1>
    <div class="row mt-4">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['title']; ?>">
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo $product['title']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="text-success"><strong><?php echo $product['price']; ?></strong></p>
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
