<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Electronics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef; /* Light background for the whole page */
        }

        .electronics-container {
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            /* White background for the content */
            padding: 40px; /* Increased padding for more space */
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* More prominent shadow for depth */
            margin: 30px 0; /* Vertical spacing */
            transition: transform 0.3s; /* Smooth scaling on hover */
        }

        .electronics-container:hover {
            transform: translateY(-5px); /* Lift effect on hover */
        }

        .nav-link {
            text-align: center; /* Center text for the link */
            display: block; /* Make the entire block clickable */
            text-decoration: none; /* Remove underline for link */
        }

        .nav-link:hover {
            text-decoration: underline; /* Underline on hover */
        }

        .image-container {
            position: relative; /* Necessary for positioning the sliding effect */
            overflow: hidden; /* Hide any overflow */
        }

        .styled-image {
            width: 10%;
            max-height: 100px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .image-container:hover .styled-image {
            transform: translateX(10px); /* Slide to the right by 10px */
        }
        
        /* Center the container vertically and horizontally */
        .full-height {
            min-height: 25vh; /* Full viewport height */
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }
    </style>
</head>
<body>

<div class="container full-height">
    <div class="electronics-container">
        

        <h1 class="mt-4 text-light" style="font-family: 'Dancing Script', cursive; font-size: 3rem; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
            Digital Electronics
        </h1>
        
        <a class="nav-link" href="mobile.php" style="text-align: center; display: block; text-decoration: none; color: #007bff; transition: color 0.3s;">
            <p class="text-success" style="margin-top: 1rem; color: #28a745; font-family: 'Arial', sans-serif; font-size: 1.2rem; text-decoration: underline; line-height: 1.5; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">
                Digital Electronics helps you discover a wide range of home electronics with cutting-edge technology including smartphones, tablets, TVs, home appliances, and more. Order online today!!!
            </p>
        </a>
        
        <div class="text-center">
            <a href="about.php" class="btn btn-dark text-light mt-2" style="display: inline-block;">About Us</a>
        </div>
    </div>
</div>

</body>
</html>
