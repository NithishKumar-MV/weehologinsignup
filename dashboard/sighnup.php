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

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$password = $_REQUEST['password'];
$sql ="INSERT INTO `login_user`(`name`, `email`, `password`, `phone`, `city`) VALUES ('$name','$email','$password','$phone','$city')";
if (mysqli_query($conn, $sql)) {
    session_start();
    $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email' and password = '$password'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["city"] = $row['city'];
        } else {
         $message = "Invalid Username or Password!";
         
        }
    
        if(isset($_SESSION["id"])) {
            header("Location:dashboard.php");
            }
}

?>
