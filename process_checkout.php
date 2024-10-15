<?php
session_start(); // Start the session

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty. You cannot proceed to checkout.</h2>";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Basic validation
    if (empty($name) || empty($address) || empty($email)) {
        echo "All fields are required.";
        exit();
    }

    // Simulated order processing
    $orderDetails = [
        'name' => $name,
        'address' => $address,
        'email' => $email,
        'items' => $_SESSION['cart'],
    ];

    // Clear the cart after processing the order
    unset($_SESSION['cart']);

    // Display confirmation
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .confirmation-container {
                background-color: #ffffff;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                margin: 30px;
            }
            .highlight {
                color: #28a745;
                font-weight: bold;
            }
            .order-item {
                background-color: #e9ecef;
                border-radius: 5px;
                padding: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>

    <div class=" text-center container mt-5 confirmation-container">
        <h1 class="text-center text-success">Order Confirmation</h1>
        <p class="text-center">Thank you, <span class="highlight"><?php echo $name; ?></span>! Your order has been placed successfully.</p>
        <h3>Order Details:</h3>
        <strong>Shipping Address:</strong> <?php echo $address; ?><br>
        <strong>Email:</strong> <?php echo $email; ?><br>
        <h4>Items Ordered:</h4>

        <div class="order-items">
            <?php foreach ($orderDetails['items'] as $item): ?>
                <div class="order-item">
                    <strong><?php echo htmlspecialchars($item['title']); ?></strong> - $<?php echo number_format($item['price'], 2); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Optional confirmation email -->
        <p class="text-center">A confirmation email has been sent to <span class="highlight"><?php echo $email; ?></span>.</p>
        <div class="text-center mt-4">
            <a href="index2.php" class="btn btn-primary">Go to Home Page</a>
        </div>
       
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "Invalid request.";
}
?>
