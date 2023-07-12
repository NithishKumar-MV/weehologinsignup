<?php

// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "weeho";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql ="SELECT `total_events` FROM `events`";
$result = mysqli_query($conn,$sql);

?>