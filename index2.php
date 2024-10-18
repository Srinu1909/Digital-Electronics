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
        .modal-content {
            background: linear-gradient(135deg, #28a745, #85e2b6); /* Green gradient */
            color: white;
            border-radius: 10px; /* Rounded corners */
        }
        .modal-header {
            border: none; /* Remove border */
            text-align: center; /* Center title */
        }
        .modal-footer {
            border: none; /* Remove border */
            justify-content: center; /* Center buttons */
        }
        .modal-title {
            font-size: 1.5rem; /* Increase title size */
            font-weight: bold; /* Make title bold */
        }
        .modal-body {
            font-size: 1.1rem; /* Increase body text size */
            text-align: center; /* Center text */
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

    <!-- Modal for Successful Registration -->
    <div class="modal fade" id="registrationSuccessModal" tabindex="-1" aria-labelledby="registrationSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationSuccessModalLabel">Registration Successful</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Congratulations! You have successfully registered your account. Enjoy exploring and our products!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>

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
