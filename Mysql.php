<?php
echo 'helloooo';

$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn =  mysqli_connect($servername, $username, $password);




// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>