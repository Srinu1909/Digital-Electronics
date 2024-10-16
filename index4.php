<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGITAL ELECTRONICS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .carousel-item img {
            width: 100%;
            height: 500px;
        }
        
    </style>
</head>
<body>
    <a href="tv.php">
        <img src="img/images.jpg" class="d-block w-100" alt="Slide 2" height="190">
    </a>

    <?php include "navbar.php"; ?>

    <?php include "carousel.php"; ?>

    <?php include "intro.php"; ?>
 
    <?php include "footer.php"; ?>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Automatically open the modal when the page loads
        $(document).ready(function() {
            $('#registrationSuccessModal').modal('show');
        });
    </script>
</body>
</html>
