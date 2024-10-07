<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Basic validation
    if (!empty($name) && !empty($email)) {
        $successMessage = "Thank you, $name! Your message has been sent.";
    } else {
        $errorMessage = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            background: url('img/electronics1.jpg') no-repeat center center fixed;
            background-size: cover;
           
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 30px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3, h4 {
            color: #343a40;
        }

        #map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
            border-radius: 8px;
        }

        .contact-list li {
            margin: 10px 0;
            font-size: 18px;
        }

        .contact-list i {
            color: #007bff;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php include "navbar.php"; ?>

<div class="container">
    <h2>Contact Us</h2>
    
    <?php if (isset($successMessage)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $successMessage; ?>
        </div>
    <?php elseif (isset($errorMessage)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>

    <h3 class="text-white">Our Location</h3>
    <div id="map" class="mt-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.0372362281637!2d55.225437135777135!3d25.089390781210206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6f98484be629%3A0x23cab1aea678ebb2!2sDigital%20Moon%20electronic%20llc!5e0!3m2!1sen!2sin!4v1728098126305!5m2!1sen!2sin" width="1000" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

   
    <ul class="contact-list list-unstyled mt-3">
        <li>
            <i class="fa fa-map-marker"></i> 123 Your Street, City, State, ZIP
        </li>
        <li>
            <i class="fa fa-envelope"></i> 
            <a href="mailto:yourmail@gmail.com">srinivaspatel-cmpn@atharvacoe.ac.in</a>
        </li>
        <li>
            <i class="fa fa-phone"></i> 9326344481
        </li>
    </ul>
  
    <h4>Drop a Message</h4>
    <form class="form-horizontal" method="post" action="contact.php">
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" required />
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" required />
        </div>
        <button class="btn btn-primary" id="submit" type="submit">
            <i class="fa fa-paper-plane"></i> SEND
        </button>
    </form>

    <a href="index2.php" class="btn btn-secondary mt-3">Go Back</a>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script>
    function initMap() {
        const location = { lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE }; // Replace with your coordinates
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>

</body>
</html>
