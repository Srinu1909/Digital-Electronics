<?php
session_start(); // Start the session at the top of the file
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
        .logo-img {
            transition: transform 0.2s ease;
        }
        .logo-img:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<a class="navbar-brand text-success mt-0" href="index2.php">
        <img src="img/logic.png" height="80" width="110" class="logo-img ml-5" alt="Description of image">
    </a>
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
            &nbsp;
          
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-info" href="index2.php">Home <span class="sr-only">(current)</span></a>
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
            <li class="nav-item">
                <a class="nav-link text-info" href="about.php">About</a>
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
            

            <li class="nav-item">
                <a class="nav-link text-info" href="mobile.php">Mobiles</a>
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
            
            <li class="nav-item">
                <a class="nav-link text-info" href="camera.php">Cameras</a>
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
            <li class="nav-item">
                <a class="nav-link text-info" href="laptop.php">Laptops</a>
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
            <li class="nav-item">
                <a class="nav-link text-info" href="tv.php">Television</a>
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
            
            <li class="nav-item">
                <a class="nav-link text-info" href="contact.php">Contact</a>
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
            &nbsp;
           
            
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-primary mt-0" href="#" id="logoutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 40px; border-radius: 50%; overflow: hidden;">
        <i class="bi bi-person-circle" style="font-size: 30px;"></i>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logoutDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">Profile</a>
        <a class="dropdown-item" href="#" onclick="confirmLogout();">Logout</a>
    </div>
</li>

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = 'logout.php'; // Redirect to the logout script
    }
}
</script>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">User Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- User Profile Information -->
                <div class="text-center mb-4">
                    <img src="<?php echo htmlspecialchars($_SESSION['profile_picture'] ?? 'img/default_profile.png'); ?>" alt="Profile Picture" class="profile-picture" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                </div>
                <h5 class="text-center"><?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?></h5>
                <p class="text-center text-muted"><?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'No email available'; ?></p>
                <form action="update_profile.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['username'] ?? ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email'] ?? ''); ?>" required>
    </div>
    <button type="submit" class="btn btn-dark">Update Profile</button>
</form>
            </div>
        </div>
    </div>
</div>


</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
