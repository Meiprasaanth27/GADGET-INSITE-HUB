<?php
session_start();
session_destroy(); // Destroy the session
header("Location: /gadget/login.html"); // Redirect to login page after logout
exit();
?>
