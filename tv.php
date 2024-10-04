<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Television Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 90%;
            height: 300px; /* Fixed height */
            object-fit: cover; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>

<?php 
include "navbar.php";	
?>

<?php
$products = [
    [
        "title" => "Sony Bravia 55\" 4K TV",
        "description" => "A stunning 4K HDR television with vibrant colors.",
        "price" => "$899.99",
        "image" => "img/sony-bravia-55.png" // Replace with actual image URL
    ],
    [
        "title" => "Samsung QLED 65\" TV",
        "description" => "Experience cinematic quality with quantum dots.",
        "price" => "$1,299.99",
        "image" => "img/samsung-qled-65.png" // Replace with actual image URL
    ],
    [
        "title" => "LG OLED 65\" TV",
        "description" => "Perfect black and stunning colors with OLED technology.",
        "price" => "$1,499.99",
        "image" => "img/lg-oled-65.png" // Replace with actual image URL
    ],
];
?>

<div class="container mt-4">
    <h1 class="text-center text-primary mb-4">Television Products</h1>
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
