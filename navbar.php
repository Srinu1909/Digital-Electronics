<?php
// Start the session at the top of the file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Navbar with Logo</title>
    <style>
        body {
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: black;
        }
        nav {
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: black;
        }
        footer {
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: black;
        }
        .logo-img {
            transition: transform 0.2s ease;
           
        }
        .logo-img:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand text-success mt-0" href="#" onclick="openModal(event)">
<div style="display: flex; justify-content: center; align-items: center; margin-top: 5px;">
    <div style="background-color: rgba(255, 255, 255, 0.8); padding: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        <img src="img/logic.png" height="90" width="130" class="logo-img" alt="Description of image" style="filter: brightness(1.2);">
    </div>
</div>

</a>

<!-- Modal Structure -->
<div id="logoModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); transition: background-color 0.3s;">
    <div style="background-color: #fff; margin: 10% auto; padding: 30px; border-radius: 8px; border: 2px solid #888; width: 70%; max-width: 600px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <span onclick="closeModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
            <img src="img/logic.png" height="100" width="140" class="logo-img" alt="Description of image" style="display: block;">
        </div>

        <p class="mt-3 text-success text-center" style="font-family: Arial, sans-serif;">Welcome to our Digital Electronics Shop! We specialize in providing a wide range of electronic components and devices for customers.</p>
        <p class="text-success text-center" style="font-family: Arial, sans-serif;">Our offerings include:</p>
        <ul class="text-primary" style="font-family: Arial, sans-serif; list-style-type: none; padding: 0;">
            <li style="margin: 10px 0; text-align: center;">
                <a href="mobile.php" style="text-decoration: none; color: blue;">Mobiles</a>
            </li>
            <li style="margin: 10px 0; text-align: center;">
                <a href="camera.php" style="text-decoration: none; color: blue;">Cameras</a>
            </li>
            <li style="margin: 10px 0; text-align: center;">
                <a href="laptop.php" style="text-decoration: none; color: blue;">Laptops</a>
            </li>
            <li style="margin: 10px 0; text-align: center;">
                <a href="tv.php" style="text-decoration: none; color: blue;">Television</a>
            </li>
        </ul>
    </div>
</div>

<script>
function openModal(event) {
    event.preventDefault(); // Prevent default anchor behavior
    document.getElementById("logoModal").style.display = "block"; // Show the modal
}

function closeModal() {
    document.getElementById("logoModal").style.display = "none"; // Hide the modal
}

// Close modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById("logoModal");
    if (event.target === modal) {
        modal.style.display = "none"; // Close modal
    }
}
</script>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            
            
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index4.php">Home <span class="sr-only">(current)</span></a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-light" href="about.php">About</a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-light" href="mobile.php">Mobiles</a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-light" href="camera.php">Cameras</a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-light" href="laptop.php">Laptops</a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp; &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <li class="nav-item">
                <a class="nav-link text-light" href="tv.php">Television</a>
            </li>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;  &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            
            <li class="nav-item">
                <a class="nav-link text-light" href="contact.php">Contact</a>
            </li>
        </ul>
        &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="ml-auto">
    <a href="#" class="nav-link text-info" onclick="confirmLogout(event)">
        <i class="bi bi-person-circle" style="font-size: 30px;"></i>
    </a>
</div>

<script>
    function confirmLogout(event) {
        event.preventDefault(); // Prevent the default action
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "logout.php"; // Redirect to logout.php if confirmed
        }
    }
</script>

        </div>
   
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
