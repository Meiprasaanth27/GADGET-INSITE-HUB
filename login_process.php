
<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "registration_details";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user data from the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        
        echo "Incorrect password!";
    } else {
       
        echo "Login successful!";
        header("Location: /gadget/index.html");
        exit();
    }
} else {
   
    echo "User not found!";
}

$conn->close();
?>
