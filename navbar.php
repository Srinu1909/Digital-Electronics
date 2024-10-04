<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Navbar with Logo</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand text-success mt-0" href="index2.php">
       
    <img src="img/logic.png" height="80" width= "110" class="my-class ml-5" alt="Description of image">
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
            &nbsp;
            &nbsp;
           
            
            
            <li class="nav-item">
            <a class="nav-link text-primary mt-0" href="#" onclick="confirmLogout();" style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 40px; border-radius: 50%; overflow: hidden; background-color: voiletblue;">
    <i class="bi bi-person-circle" style="font-size: 30px;"></i>
</a>


</li>

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = 'logout.php'; // Redirect to the logout script
    }
}
</script>

        </ul>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
