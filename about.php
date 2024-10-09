<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            background: url('img/electronics1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: black;
        }

        .section {
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
            animation: zoomAnimation 4s infinite alternate; /* Add animation */
        }

        .bg-light {
            background-color: #ffffff;
        }

        .bg-dark {
            background-color: #343a40;
            color: #ffffff;
        }

        .text-primary {
            color: #007bff;
        }

        .section-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .text-success {
            text-align: center;
        }

        .corner-box {
            position: relative;
            overflow: hidden;
            margin: 20px 0;
        }

        .corner-box:before {
            content: '';
            position: absolute;
            left: -15px;
            top: -15px;
            width: calc(100% + 30px);
            height: calc(100% + 30px);
            background: inherit;
            border-radius: 8px;
            z-index: 1;
            transform: skew(-5deg);
        }

        .content {
            position: relative;
            z-index: 2;
        }

        @keyframes zoomAnimation {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            }
            100% {
                transform: scale(1.05);
                box-shadow: 0 8px 40px rgba(0, 0, 0, 0.3);
            }
        }

        /* Pause animation on hover */
        .section:hover {
            animation-play-state: paused;
        }

        @media (min-width: 768px) {
            .section {
                display: flex;
                align-items: center;
                flex-direction: column;
            }

            .section.left {
                align-items: flex-start;
            }

            .section.right {
                align-items: flex-end;
            }
        }
    </style>
</head>
<body>

<?php 
 include "navbar.php";	
?>

<!-- Main Content -->
<div class="container my-5">

    <div class="section corner-box bg-light">
        <div class="content">
            <h2 class="text-primary text-center section-title">Our Mission</h2>
            <p class="text-success">Our mission is to deliver high-quality services that exceed our customers' expectations. We aim to foster a culture of innovation, integrity, and sustainability.</p>
        </div>
    </div>

    <div class="section corner-box bg-dark">
        <div class="content">
            <h2 class="text-primary text-center section-title">Our History</h2>
            <p class="text-success">Founded in 2020, we have grown from a small startup to a leading provider in our industry. Our commitment to excellence has been recognized by numerous awards and certifications.</p>
        </div>
    </div>

    <div class="section corner-box bg-light">
        <div class="content">
            <h2 class="text-primary text-center section-title">Our Values</h2>
            <ul class="list-unstyled text-success">
                <li><strong class="text-secondary">Integrity:</strong> We uphold the highest standards of integrity in all of our actions.</li>
                <li><strong class="text-secondary">Customer Commitment:</strong> We develop relationships that make a positive difference in our customers' lives.</li>
                <li><strong class="text-secondary">Quality:</strong> We provide outstanding products and unsurpassed service that, together, deliver premium value to our customers.</li>
                <li><strong class="text-secondary">Teamwork:</strong> We work together, across boundaries, to meet the needs of our customers and help the company win.</li>
                <li><strong class="text-secondary">Innovation:</strong> We are constantly seeking to improve and innovate in our services and processes.</li>
            </ul>
        </div>
    </div>

    <div class="section corner-box bg-dark">
        <div class="content">
            <h3 class="text-primary text-center section-title">Our Philosophy</h3>
            <p class="text-center text-success">We believe in collaboration and continuous improvement to provide outstanding products and unsurpassed service that deliver premium value to our customers.</p>
        </div>
    </div>
    
</div>

</body>
</html>
