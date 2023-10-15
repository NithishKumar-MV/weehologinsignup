<?php
include("db_connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password =$_POST['password'];

$sql="SELECT * from `users`  Where `email`='$email' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if($row==0){

    // Insert data into the database
    $sql = "INSERT INTO `users`(`name`,`phone_number`,`email`,`password`) VALUES ('$name','$tel','$email','$password')";

    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}  
    else{
            echo "user all ready exist";   
    }
}else{
    echo "User already exists";
}

$conn->close();

?>