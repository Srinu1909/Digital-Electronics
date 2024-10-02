<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa; /* Light background color */
        }

        .container {
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            margin-bottom: 20px;
        }

        .text-primary {
            color: #007bff; /* Bootstrap primary color */
        }

        .text-light {
            color: #ffffff; /* Light color for captions */
        }

        .bg-light {
            background-color: #ffffff; /* White background for the container */
        }

        /* Add some decorative elements */
        .section-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .team-member {
            margin: 20px 0;
            padding: 15px;
            background: #e9ecef; /* Light grey for team member section */
            border-radius: 5px;
        }

        /* Responsive image for team members (if needed) */
        .team-member img {
            border-radius: 50%; /* Circular image */
            width: 100px; /* Fixed size */
            height: 100px; /* Fixed size */
            margin-right: 15px; /* Space between image and text */
        }
    </style>
</head>
<body>
    
<?php 
 include "navbar.php";	
?>

<!-- Main Content -->
<div class="container my-5 bg-light">
    <h1 class="text-center text-primary section-title">About Us</h1>
    <p class="text-center text-success">Welcome to our website! We are dedicated to providing you with the best service possible. Our team is made up of experienced professionals who are passionate about what they do.</p>
    
    <h2 class="text-center text-primary section-title">Our Mission</h2>
    <p class="text-center text-success">Our mission is to deliver high-quality services that exceed our customers' expectations. We aim to foster a culture of innovation, integrity, and sustainability.</p>  

    <h2 class="text-center text-primary section-title">Our History</h2>
    <p class="text-center text-success">Founded in 2020, we have grown from a small startup to a leading provider in our industry. Our commitment to excellence has been recognized by numerous awards and certifications.</p>

    <h2 class="text-center text-primary section-title">Our Values</h2>
    
    <ul class="list-unstyled text-center text-success">
        <li><strong class="text-dark">Integrity:</strong> We uphold the highest standards of integrity in all of our actions.</li>
        <li><strong class="text-dark">Customer Commitment:</strong> We develop relationships that make a positive difference in our customers' lives.</li>
        <li><strong class="text-dark">Quality:</strong> We provide outstanding products and unsurpassed service that, together, deliver premium value to our customers.</li>
        <li><strong class="text-dark">Teamwork:</strong> We work together, across boundaries, to meet the needs of our customers and help the company win.</li>
        <li><strong class="text-dark" >Innovation:</strong> We are constantly seeking to improve and innovate in our services and processes.</li>
    </ul>

    <h3 class="text-center text-light">Our Philosophy</h3>
    <p class="text-center text-light">We believe in collaboration and continuous improvement.</p>
</div>

</body>
</html>
