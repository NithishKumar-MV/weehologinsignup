<?php
// MySQL database credentials
$conn = mysqli_connect("localhost", "root", "", "weeho");

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$date = $_REQUEST['date'];
echo "df";
$sql ="INSERT INTO `book_an_events`(`name`, `phone_number`, `email`, `city`, `date_events`) VALUES ('$name','$phone','$email','$city','$date')";

if (mysqli_query($conn, $sql)) {
    header("Location: ./fill.php");
}

?>