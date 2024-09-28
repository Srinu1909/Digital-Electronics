<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include "navbar.php"; ?>

   <?php
     $name = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
    ?>

    <div class = "container mt-5">
        <div class = "row justify-content-center">
            <div class = "col-sm-4">
                <div class="alert alert-primary" role="alert">
                    Your Username : <?php echo"$name"?>
                </div>
                <div class="alert alert-secondary" role="alert">
                    Your Email : <?php echo"$email"?>
                </div>
                <div class="alert alert-danger" role="alert">
                    Your Password : <?php echo"$password"?>
                </div>
</div>
</div>
</div>

</body>
</html>