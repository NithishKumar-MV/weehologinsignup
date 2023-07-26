<?php
session_start();
$conn=mysqli_connect('localhost','root','','weeho');
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];
$email=$_SESSION['email'];
if($password == $confirm_password){
    $sql="UPDATE `login_user` SET `password`='$password' WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        
        header("Location:dashboard.php");        
}
}
?>