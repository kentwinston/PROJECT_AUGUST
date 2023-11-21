<?php
/*
$conn = mysqli_connect("localhost","root","","bdo");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
$servername = "localhost";
$username = "root";
$password = "";
$database ="bdo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


?>