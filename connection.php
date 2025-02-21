<?php

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crud1";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'crud1', 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
