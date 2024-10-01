<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Here you would typically save to a database
        // For demonstration, we just store in a session
        $_SESSION['users'][$username] = password_hash($password, PASSWORD_DEFAULT);
        header('Location: index.php'); // Redirect to login page after registration
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: url('img/electronics1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: black;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            margin: auto;
            margin-top: 100px;
        }
        .form-control {
            background-color: lightgrey;
            border: none;
            border-bottom: 2px solid #fff;
            color: black; /* Changed to black for better readability */
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.3);
            border-color: #fff;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #6a11cb;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2575fc;
        }
        .register-link {
            color: blue;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="text-center text-success">REGISTER</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="register.php" method="post">
            <div class="form-group mt-5">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group mt-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-5">Sign Up</button>
            <p class="mt-3">Already have an account? <a href="index.php" class="register-link">Login</a>.</p>
        </form>
    </div>

</body>
</html>
