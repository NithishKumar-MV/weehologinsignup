<?php
session_start();
$conn=mysqli_connect('localhost','root','','weeho');
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];
$email=$_SESSION['email'];
if($password == $confirm_password){
    $sql="UPDATE `login_user` SET `password`='$password' WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        
        $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email' and password = '$password'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["city"] = $row['city'];
        unset($_SESSION["message"]);
        } else {
         $message = "Invalid Username or Password!";
         
        }
    
        if(isset($_SESSION["id"])) {
            header("Location:dashboard.php");
            }
        
}
}
?>