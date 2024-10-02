<?php
$servername = "localhost";
$username = "root";  // Use the MariaDB username you created
$password = "root";    // Use the MariaDB password you set
$dbname = "CAT1";      // Use the database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
