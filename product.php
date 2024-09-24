<?php
$products = [
    [
        "title" => "Nikon Camera",
        "description" => "Description for product 1.",
        "price" => "$19.99",
        
    ],
    [
        "title" => "Samsung Galaxy Smartphone",
        "description" => "Description for product 2.",
        "price" => "$29.99",
        
    ],
    [
        "title" => "Sony Bravia HD TV",
        "description" => "Description for product 3.",
        "price" => "$39.99",
        
    ],
    [
        "title" => "Nikon Camera",
        "description" => "Description for product 1.",
        "price" => "$19.99",
        
    ],
    [
        "title" => "Samsung Galaxy Smartphone",
        "description" => "Description for product 2.",
        "price" => "$29.99",
        
    ],
    [
        "title" => "Sony Bravia HD TV",
        "description" => "Description for product 3.",
        "price" => "$39.99",
        
    ],
];
?>

<div class="container mt-5 ">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    
                    <div class="card-body bg-light">
                        <h5 class="card-title"><?php echo $product['title']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="text-info"><strong><?php echo $product['price']; ?></strong></p>
                        <a href="#" class="btn btn-dark text-success">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
