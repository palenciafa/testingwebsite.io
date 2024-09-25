<?php
// Database configuration
$servername = "localhost";
$dbusername = "root"; // Your MySQL username
$dbpassword = ""; // Your MySQL password
$dbname = "patients";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

?>