<?php
$servername = "localhost";
$username = "loginuser";  // Use the MariaDB username you created
$password = "password";    // Use the MariaDB password you set
$dbname = "loginapp";      // Use the database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
