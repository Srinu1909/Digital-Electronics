<?php
session_start();
$_SESSION = array(); // Clear session data
session_destroy(); // Destroy session
header('Location: index3.php'); // Redirect to login page
exit;
?>
