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

$occasion = $_REQUEST['occasion'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$date = $_REQUEST['date'];
echo "df";
$sql ="INSERT INTO `book_an_events`(`name`, `phone_number`, `email`, `city`, `date_events`,`occasion`) VALUES ('$name','$phone','$email','$city','$date','$occasion')";
if (mysqli_query($conn, $sql)) {
    header("Location: ./dashboard.php");
}

?>
