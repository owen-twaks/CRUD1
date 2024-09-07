<?php
$servername = "localhost";
$username = "root"; // your db username
$password = ""; // your db password
$dbname = "php-crud"; // database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected successfully";
}
?>