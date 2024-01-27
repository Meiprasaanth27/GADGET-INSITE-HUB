<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "news_dataentry";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the 'news' table (replace 'news' with your actual table name)
$title = "Breaking News";
$content = "This is a breaking news story.";

$sql = "INSERT INTO news (TITLE, CONTENT) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "News inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
