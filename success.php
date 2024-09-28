<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php 
 include "navbar.php";	
?>

<div class="container mt-5">
    <h2 class="text-success text-center">Registration Successful!</h2>
    <p class="text-dark text-center">Thank you for registering. You can now <a href="login.php">log in</a>.</p>
</div>


<?php 
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
?>

<div class="container mt-5">
   <div class = "row justify-content-center">
    <div class= "col-sm-7">
        <div class="alert alert-success" role="alert">
            Your Username : <?php echo"$name"?>
        </div>
        <div class="alert alert-success" role="alert">
            Your Email : <?php echo"$email"?>
        </div>
        <div class="alert alert-success" role="alert">
            Your Password : <?php echo"$password"?>
        </div>
    </div>
</div>
</div>

</body>
</html>
