<?php
include("conn.php");
session_start();
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$password = $_REQUEST['password'];
$result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email'");
$count = mysqli_num_rows($result);
if($count !=0){
    $_SESSION["message"] = "user all ready exist";
    header("Location:login.php");
    exit();
}
if($name == "" || $phone == "" || $email == "" || $city == "" || $password == "" ){
    $message = "all field are mandatory!";
    $_SESSION["message"] = $message;
    header("Location:sighnup.php");
    exit();
}
$sql ="INSERT INTO `login_user`(`name`, `email`, `password`, `phone`, `city`) VALUES ('$name','$email','$password','$phone','$city')";
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

?>
